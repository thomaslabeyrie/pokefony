<?php

namespace App\Service;

use App\PokeApiClient\DTO\Evolution\ChainLinkDTO;
use App\PokeApiClient\DTO\Evolution\EvolutionChainDTO;
use App\PokeApiClient\DTO\Pokedex\PokedexDTO;
use App\PokeApiClient\DTO\Pokemon\PokemonDTO;
use App\PokeApiClient\DTO\PokemonSpecies\PokemonSpeciesDTO;
use App\PokeApiClient\DTO\Type\TypeDTO;
use App\PokeApiClient\PokeApiClient;

class PokeApiService
{
    public function __construct(
        private readonly PokeApiClient $pokeApiClient,
    ) {
    }

    public function getPokemonsByRegion(string $region = 'national', int $page = 1, int $perPage = 20): array
    {
        // Récupère la liste complète du Pokédex de la région
        $pokedex = $this->pokeApiClient->get(PokedexDTO::class, $region);

        $allNames = [];
        foreach ($pokedex->pokemonEntries as $entry) {
            $allNames[] = $entry->pokemonSpecies->name;
        }

        // Pagination
        $offset = ($page - 1) * $perPage;
        $pageNames = array_slice($allNames, $offset, $perPage);

        // Récupère les infos nécessaires à l'affichage de chaque pokémon
        $pokemons = [];
        foreach ($pageNames as $name) {
            $pokemons[] = $this->pokeApiClient->get(PokemonDTO::class, $name);
        }

        return $pokemons;
    }

    public function getFullPokemonData(string|int $identifier): array
    {
        $pokemon = $this->pokeApiClient->get(PokemonDTO::class, $identifier);

        $types = [];
        foreach ($pokemon->types as $slot) {
            $types[] = $this->pokeApiClient->get(TypeDTO::class, $slot->type->name);
        }

        $species = $this->pokeApiClient->get(PokemonSpeciesDTO::class, $pokemon->name);

        $evolutionChain = $this->pokeApiClient->getFromResource(EvolutionChainDTO::class, $species->evolutionChain);

        $enrichedEvolutionChain = $this->enrichEvolutionChain($evolutionChain);

        return [
            'pokemon' => $pokemon,
            'species' => $species,
            'types' => $types,
            'evolutionChain' => $enrichedEvolutionChain,
        ];
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
