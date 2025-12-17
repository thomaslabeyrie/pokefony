<?php

namespace App\Service;

use App\DTO\PokemonDTO;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class PokeApiService
{
    public function __construct(
        private HttpClientInterface $httpClient,
        private string $pokeApiUrl = 'https://pokeapi.co/api/v2/'
    ) {}

    /**
     * Récupère x pokémons aléatoires
     */
    public function getRandomPokemons(int $count)
    {
        try {
            // Generate $count random IDs
            $allIds = range(1, 1000);
            shuffle($allIds);
            $randomIDs = array_slice($allIds, 0, $count);

            $responses = [];
            foreach ($randomIDs as $id) {
                $responses[] = $this->httpClient->request(
                    'GET',
                    "{$this->pokeApiUrl}pokemon/{$id}"
                );
            }

            $pokemons = [];
            foreach ($responses as $response) {
                $pokemons[] = $response->toArray();
            }

            return $pokemons;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Récupère tous les pokémons d'une région
     */
    public function getPokemonsByRegion(string $region, int $pokedexOffset, int $page)
    {
        try {
            $limit = 18;
            $offset = $pokedexOffset + ($page - 1) * $limit;

            $response = $this->httpClient->request(
                'GET',
                "{$this->pokeApiUrl}pokemon?offset={$offset}&limit={$limit}"
            );

            $pokemonEntries = $response->toArray()['results'];

            foreach ($pokemonEntries as $entry) {
                $responses[] = $this->httpClient->request(
                    'GET',
                    $entry['url'],
                );
            }

            $pokemons = [];
            foreach ($responses as $response) {
                $pokemons[] = $response->toArray();
            }

            return $pokemons;
        } catch (TransportExceptionInterface $e) {
            return [];
        }
    }

    public function getPokemonByName(string $name): PokemonDTO
    {
        // Récupère les données du Pokémon
        $pokemonResponse = $this->httpClient->request('GET', "{$this->pokeApiUrl}pokemon/{$name}");
        $pokemonData = $pokemonResponse->toArray();

        // Récupère les données de l'espèce
        $speciesResponse = $this->httpClient->request('GET', $pokemonData['species']['url']);
        $speciesData = $speciesResponse->toArray();

        // Récupère les données des types
        $typesData = $this->fetchTypesData($pokemonData['types']);

        return PokemonDTO::fromApiResponse($pokemonData, $speciesData, $typesData);
    }

    /**
     * Regroupe les flavor texts identiques présents dans des versions différentes
     */
    public function formatPokedexEntries(array $entries): array
    {
        // Filtre les entrées non anglaises
        $filtered = array_filter($entries, fn($entry) => $entry['language']['name'] === 'en');

        // Groupe les entrées selon le flavor text
        $grouped = [];
        foreach ($filtered as $entry) {
            if (is_null(array_find_key($grouped, fn($key) => $key === $entry['flavor_text']))) {
                $grouped[$entry['flavor_text']][] = $entry['version']['name'];
            }
        }

        return $grouped;
    }

    private function fetchTypesData(array $types): array
    {
        $typesData = [];
        $responses = [];

        // Lancer toutes les requêtes en parallèle
        foreach ($types as $typeEntry) {
            $typeName = $typeEntry['type']['name'];
            $responses[$typeName] = [
                'slot' => $typeEntry['slot'],
                'response' => $this->httpClient->request('GET', $typeEntry['type']['url'])
            ];
        }

        // Attendre toutes les réponses et stocker les données brutes
        foreach ($responses as $typeName => $data) {
            $typesData[] = [
                'slot' => $data['slot'],
                'name' => $typeName,
                'details' => $data['response']->toArray()
            ];
        }

        return $typesData;
    }
}
