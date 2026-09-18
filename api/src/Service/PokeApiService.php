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

    /** @return PokemonDTO[] */
    public function getPokemonsByRegion(string $region = 'national', int $page = 1, int $perPage = 20): array
    {
        // Liste complète du Pokédex de la région
        $pokedex = $this->pokeApiClient->get(PokedexDTO::class, $region);

        // Building a map of pokemon types so we can avoid an API call for each pokemon : ["bulbasaur" => [0: "grass", 1: "poisoin"]]
        $pokeTypeMap = [];

        foreach (TypeEnum::cases() as $type) {
            $typeData = $this->pokeApiClient->get(TypeDTO::class, $type->value);

            foreach ($typeData->pokemon as $entry) {
                $pokeTypeMap[$entry->pokemon->name][$entry->slot - 1] = $typeData->name;
            }
        }

        return array_map(
            function (PokemonEntryDTO $entry) use ($pokeTypeMap) {
                return [
                    'name' => $entry->pokemonSpecies->name,
                    'number' => $entry->entryNumber,
                    'types' => $pokeTypeMap[$entry->pokemonSpecies->name],
                    // Using the raw sprite URL lets us avoid another API call per pokemon
                    'spriteUrl' => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/$entry->entryNumber.png",
                ];
            },
            $pokedex->pokemonEntries,
        );
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
}
