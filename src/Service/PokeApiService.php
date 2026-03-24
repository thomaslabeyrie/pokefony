<?php

namespace App\Service;

use App\PokeApiClient\DTO\Ability\AbilityDTO;
use App\PokeApiClient\DTO\Evolution\ChainLinkDTO;
use App\PokeApiClient\DTO\Evolution\EvolutionChainDTO;
use App\PokeApiClient\DTO\Pokedex\PokedexDTO;
use App\PokeApiClient\DTO\Pokemon\PokemonDTO;
use App\PokeApiClient\DTO\PokemonSpecies\PokemonSpeciesDTO;
use App\PokeApiClient\DTO\Type\TypeDTO;
use App\PokeApiClient\PokeApiClient;

readonly class PokeApiService
{
    public function __construct(
        private PokeApiClient $pokeApiClient,
    )
    {
    }

    public function getPokemonsByRegion(string $region = 'national', int $page = 1, int $perPage = 20): array
    {
        // Récupère la liste complète du Pokédex de la région
        $pokedex = $this->pokeApiClient->get(PokedexDTO::class, $region);

        // Pagination
        $offset = ($page - 1) * $perPage;
        $paginatedEntries = array_slice($pokedex->pokemonEntries, $offset, $perPage);

        return array_map(
            fn($entry) => $this->pokeApiClient->get(PokemonDTO::class, $entry->pokemonSpecies->name),
            $paginatedEntries
        );
    }

    public function getFullPokemonData(string|int $identifier): array
    {
        $pokemon = $this->pokeApiClient->get(PokemonDTO::class, $identifier);

        $types = array_map(
            fn($slot) => $this->pokeApiClient->get(TypeDTO::class, $slot->type->name),
            $pokemon->types
        );

        $species = $this->pokeApiClient->get(PokemonSpeciesDTO::class, $pokemon->name);

        $abilities = array_map(
            fn($slot) => $this->pokeApiClient->get(AbilityDTO::class, $slot->ability->name),
            $pokemon->abilities
        );

        $evolutionChain = $this->pokeApiClient->getFromResource(EvolutionChainDTO::class, $species->evolutionChain);

        $enrichedEvolutionChain = $this->enrichEvolutionChain($evolutionChain);

        return [
            'pokemon' => $pokemon,
            'species' => $species,
            'abilities' => $abilities,
            'types' => $types,
            'evolutionChain' => $enrichedEvolutionChain,
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
            'types' => $types
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

    private function enrichEvolutionChain(EvolutionChainDTO $evolutionChain): EvolutionChainDTO
    {
        $this->enrichChainLink($evolutionChain->chain);
        return $evolutionChain;
    }

    private function enrichChainLink(ChainLinkDTO $link): void
    {
        $pokemon = $this->pokeApiClient->get(PokemonDTO::class, $link->species->name);
        $link->sprite = $pokemon->sprites->other->officialArtwork->frontDefault;

        foreach ($pokemon->types as $slot) {
            $link->types[] = $slot->type->name;
        }

        foreach ($link->evolvesTo as $stage) {
            $this->enrichChainLink($stage);
        }
    }
}
