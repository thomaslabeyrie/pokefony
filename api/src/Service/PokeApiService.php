<?php

namespace App\Service;

use App\Enum\TypeEnum;
use App\PokeApiClient\DTO\Evolution\EvolutionChainDTO;
use App\PokeApiClient\DTO\Pokedex\PokedexDTO;
use App\PokeApiClient\DTO\Pokedex\PokemonEntryDTO;
use App\PokeApiClient\DTO\Pokemon\PokemonDTO;
use App\PokeApiClient\DTO\PokemonSpecies\PokemonSpeciesDTO;
use App\PokeApiClient\DTO\Type\TypeDTO;
use App\PokeApiClient\PokeApiClient;

readonly class PokeApiService
{
    public function __construct(
        private PokeApiClient $pokeApiClient,
    ) {}

    public function getPokemonsByRegion(string $region = 'national', int $page = 1, int $perPage = 20): array
    {
        $pokedex = $this->pokeApiClient->get(PokedexDTO::class, $region);
        // Building a map of pokemon types so we can avoid an API call for each pokemon : ["bulbasaur" => [0: "grass", 1: "poisoin"]]
        $pokeTypeMap = [];

        foreach (TypeEnum::cases() as $type) {
            $typeData = $this->pokeApiClient->get(TypeDTO::class, $type->value);

            foreach ($typeData->pokemon as $entry) {
                $pokeTypeMap[$entry->pokemon->name][$entry->slot - 1] = $typeData->name;
            }

            // Chaque sous-tableau est trié par slot (0 puis 1) puis ré-indexé avec
            // array_values(), car un tableau inséré dans le désordre reste en mode
            // "hashtable" pour PHP même trié : json_encode() le sérialiserait alors
            // en objet JSON ({"0":...}) au lieu d'un array ([...]).
            foreach ($pokeTypeMap as $name => $types) {
                ksort($types);
                $pokeTypeMap[$name] = array_values($types);
            }
        }

        $data = array_map(
            function (PokemonEntryDTO $entry) use ($pokeTypeMap) {
                return [
                    'name' => $entry->pokemonSpecies->name,
                    'number' => $entry->entryNumber,
                    // La type map est indexée par la variety par défaut du pokémon, pas par le nom de la species.
                    // Donc si l'utilisation du nom de la species ne fonctionne pas, on cherche la variety par défaut à la place.
                    'types' =>
                        $pokeTypeMap[$entry->pokemonSpecies->name]
                            ?? $pokeTypeMap[$this->getDefaultVariety($entry->pokemonSpecies->name)],
                    // Using the raw sprite URL lets us avoid another API call per pokemon
                    'spriteUrl' => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/$entry->entryNumber.png",
                ];
            },
            $pokedex->pokemonEntries,
        );

        return $data;
    }

    public function getFullPokemonData(string|int $identifier): array
    {
        $pokemon = $this->pokeApiClient->get(PokemonDTO::class, $identifier);
        $types = array_map(fn($slot) => $this->pokeApiClient->get(TypeDTO::class, $slot->type->name), $pokemon->types);
        $species = $this->pokeApiClient->get(PokemonSpeciesDTO::class, $pokemon->name);
        $evolutionChain = $this->pokeApiClient->getFromResource(EvolutionChainDTO::class, $species->evolutionChain);

        return [
            'pokemon' => $pokemon,
            'species' => $species,
            'types' => $types,
            'evolutionChain' => $evolutionChain,
        ];
    }

    public function getPcPokemonData(string|int $identifier): array
    {
        $pokemon = $this->pokeApiClient->get(PokemonDTO::class, $identifier);

        $types = [];
        foreach ($pokemon->types as $slot) {
            $types[] = $this->pokeApiClient->get(TypeDTO::class, $slot->type->name);
        }

        return [
            'pokemon' => $pokemon,
            'types' => $types,
        ];
    }

    public function getPcPokemonListData(string|int $identifier): PokemonDTO
    {
        return $this->pokeApiClient->get(PokemonDTO::class, $identifier);
    }

    public function getAllPokemonNames(): array
    {
        return $this->pokeApiClient->getAllPokemons();
    }

    private function getDefaultVariety(string $pokemon): string
    {
        $speciesData = $this->pokeApiClient->get(PokemonSpeciesDTO::class, $pokemon);
        return $speciesData->varieties[0]->pokemon->name;
    }
}
