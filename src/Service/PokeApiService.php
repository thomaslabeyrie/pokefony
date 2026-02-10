<?php

namespace App\Service;

use App\DTO\ApiEvolution\EvolutionChainDTO;
use App\DTO\ApiPokemon\PokemonDTO;
use App\DTO\ApiPokemonSpecies\PokemonSpeciesDTO;
use App\DTO\ApiType\TypeDTO;
use App\DTO\Pokedex\PokedexEntryDTO;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PokeApiService
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly SerializerInterface $serializer,
        private readonly string $pokeApiUrl = 'https://pokeapi.co/api/v2/'
    ) {}

    /**
     * @return PokedexEntryDTO[]
     */
    public function getPokemonsByRegion(string $region = "national", int $page = 1, int $perPage = 20): array
    {
            // Récupère la liste complète du Pokédex de la région
            $pokedexResponse = $this->httpClient->request('GET', "{$this->pokeApiUrl}pokedex/{$region}");
            $pokedexData = $pokedexResponse->toArray();

            // Extrait les noms des Pokémon
            $allNames = array_map(
                fn($entry) => $entry['pokemon_species']['name'],
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
                );}

            return $pokemons;
    }

    /**
     * Récupère les données d'un Pokémon depuis PokéApi.
     *
     * @param string|int $identifier Nom ou ID du Pokémon
     */
    public function getPokemon(string|int $identifier): array
    {
        // Récupère les données du Pokémon
        $pokemonResponse = $this->httpClient->request('GET', "{$this->pokeApiUrl}pokemon/{$identifier}");
        $pokemon = $this->serializer->deserialize(
            data: $pokemonResponse->getContent(),
            type: PokemonDTO::class,
            format: 'json',
            context: [
                'groups' => ['pokemon'],
            ]
        );

        // Récupère les données de l'espèce
        $speciesResponse = $this->httpClient->request('GET', $pokemon->getSpecies()->getUrl());
        $species = $this->serializer->deserialize(
            data: $speciesResponse->getContent(),
            type: PokemonSpeciesDTO::class,
            format: 'json'
        );

        // Récupère les données des types
        $typesResponses = [];
        foreach ($pokemon->getTypes() as $entry) {
            $typesResponses[] = $this->httpClient->request('GET', $entry->getType()->getUrl());
        }

        $types = [];
        foreach ($typesResponses as $response) {
            $types[] = $this->serializer->deserialize(
                data: $response->getContent(),
                type: TypeDTO::class,
                format: 'json'
            );
        }

        // Récupère les données de la chaîne d'évolution
        $evolutionChainResponse = $this->httpClient->request('GET', $species->getEvolutionChain()->getUrl());
        $evolutionChain = $this->serializer->deserialize(
            data: $evolutionChainResponse->getContent(),
            type: EvolutionChainDTO::class,
            format: 'json'
        );

        return array(
            'pokemon' => $pokemon,
            'species' => $species,
            'types' => $types,
            'evolutionChain' => $evolutionChain,
        );
    }
}
