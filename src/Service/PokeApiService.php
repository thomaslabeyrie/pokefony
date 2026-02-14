<?php

namespace App\Service;

use App\PokeApiClient\DTO\Evolution\EvolutionChainDTO;
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
        $pokedexResponse = $this->httpClient->request('GET', "{$this->pokeApiUrl}pokedex/{$region}");
        $pokedexData = $pokedexResponse->toArray();

        // Extrait les noms des Pokémon
        $allNames = array_map(
            fn ($entry) => $entry['pokemon_species']['name'],
            $pokedexData['pokemon_entries']
        );

        // Pagination
        $offset = ($page - 1) * $perPage;
        $pageNames = array_slice($allNames, $offset, $perPage);

        // Récupère les infos nécéssaires à l'affichage de chaque pokémon
        $responses = [];
        foreach ($pageNames as $name) {
            $responses[] = $this->httpClient->request('GET', "{$this->pokeApiUrl}pokemon/{$name}");
        }

        $pokemons = [];
        foreach ($responses as $response) {
            $data = $response->getContent();
            $pokemons[] = $this->serializer->deserialize(
                data: $data,
                type: PokemonDTO::class,
                format: 'json',
                context: [
                    'groups' => ['pokemon'],
                ]
            );
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
