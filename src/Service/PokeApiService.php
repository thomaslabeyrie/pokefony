<?php

namespace App\Service;

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
        $pokedex = $this->pokeApiClient->get(new PokedexDTO(), $region);

        $allNames = [];
        foreach ($pokedex->pokemonEntries as $entry) {
            $allNames[] = $entry->pokemonSpecies->name;
        }

        // Pagination
        $offset = ($page - 1) * $perPage;
        $pageNames = array_slice($allNames, $offset, $perPage);

        // Récupère les infos nécéssaires à l'affichage de chaque pokémon
        $pokemons = [];
        foreach ($pageNames as $name) {
            $pokemons[] = $this->pokeApiClient->get(new PokemonDTO(), $name);
        }

        return $pokemons;
    }

    public function getFullPokemonData(string|int $identifier): array
    {
        $pokemon = $this->pokeApiClient->get(new PokemonDTO(), 'bulbasaur');

        $types = [];
        foreach ($pokemon->types as $slot) {
            $types[] = $this->pokeApiClient->get(new TypeDTO(), $slot->type->name);
        }

        $species = $this->pokeApiClient->get(new PokemonSpeciesDTO(), $pokemon->name);

        $evolutionChain = $this->pokeApiClient->getFromResource($species->evolutionChain, new EvolutionChainDTO());

        return [
            'pokemon' => $pokemon,
            'species' => $species,
            'types' => $types,
            'evolutionChain' => $evolutionChain,
        ];
    }
}
