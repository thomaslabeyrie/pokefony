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
use Symfony\Contracts\Cache\ItemInterface;

readonly class PokeApiService
{
    public function __construct(
        private PokeApiClient $pokeApiClient,
        private PokedexProvider $cache,
    ) {}

    public function getPokedex(string $region = 'national', int $page = 1, int $perPage = 20): array
    {
        $cached = $this->cache->get("pokedex_{$region}", function (ItemInterface $item) use ($region) {
            $item->expiresAfter(60 * 60 * 24);

            // Map to avoid one API call per pokemon: ["bulbasaur" => ["grass", "poison"]]
            $typesByPokemon = [];

            foreach (TypeEnum::cases() as $type) {
                $apiType = $this->pokeApiClient->get(TypeDTO::class, $type->value);

                foreach ($apiType->pokemon as $entry) {
                    $typesByPokemon[$entry->pokemon->name][$entry->slot - 1] = $apiType->name;
                }

                // Sort by slot and reindex so json_encode() outputs an array, not an object
                foreach ($typesByPokemon as $name => $types) {
                    ksort($types);
                    $typesByPokemon[$name] = array_values($types);
                }
            }

            $apiPokedex = $this->pokeApiClient->get(PokedexDTO::class, $region);

            $pokedex = array_map(
                function (PokemonEntryDTO $entry) use ($typesByPokemon) {
                    return [
                        'name' => $entry->pokemonSpecies->name,
                        'number' => $entry->entryNumber,
                        // The map is keyed by default variety name, so fall back to it
                        'types' =>
                            $typesByPokemon[$entry->pokemonSpecies->name]
                                ?? $typesByPokemon[$this->getDefaultVariety($entry->pokemonSpecies->name)],
                        // Raw sprite URL: no extra API call
                        'spriteUrl' => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/$entry->entryNumber.png",
                    ];
                },
                $apiPokedex->pokemonEntries,
            );

            return  [
                'rows' => $pokedex,
                'totalEntries' => count( $apiPokedex->pokemonEntries )
            ];
        });

        return  [
            'paginatedRows' => array_slice($cached['rows'], ($page - 1) * $perPage, $perPage),
            'totalEntries' => $cached['totalEntries']
        ];
    }

    /**
     * Aggregates data about a specific pokémon from various PokéAPI endpoints
     */
    public function getFullPokemonData(string|int $idOrName): array
    {
        $pokemon = $this->pokeApiClient->get(PokemonDTO::class, $idOrName);
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
