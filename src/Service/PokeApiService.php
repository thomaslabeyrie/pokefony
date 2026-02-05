<?php

namespace App\Service;

use App\DTO\Pokedex\PokedexEntryDTO;
use App\DTO\Pokemon\PokemonDTO;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class PokeApiService
{
    public function __construct(
        private HttpClientInterface $httpClient,
        private CacheInterface $cache,
        private string $pokeApiUrl = 'https://pokeapi.co/api/v2/'
    ) {}

    /**
     * @return PokedexEntryDTO[]
     */
    public function getPokemonsByRegion(string $region, int $page, int $perPage = 20): array
    {
        $cacheKey = "pokedex_{$region}_page_{$page}";

        return $this->cache->get($cacheKey, function (ItemInterface $item) use ($region, $page, $perPage) {
            // Cache for 24 hour
            $item->expiresAfter(60 * 60 * 24);

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
                $data = $response->toArray();
                $pokemons[] = PokedexEntryDTO::fromApiResponse($data);
            }

            return $pokemons;
        });
    }

    /**
     * Récupère les données d'un Pokémon depuis PokéApi.
     *
     * @param string|int $identifier Nom ou ID du Pokémon
     */
    public function getPokemon(string|int $identifier): PokemonDTO
    {
        $cacheKey = "pokemon_detail_{$identifier}";

        return $this->cache->get($cacheKey, function (ItemInterface $item) use ($identifier) {
            // Cache for 24 hours (86400 seconds) - Pokemon data never changes
            $item->expiresAfter(86400);

            // Récupère les données du Pokémon
            $pokemonResponse = $this->httpClient->request('GET', "{$this->pokeApiUrl}pokemon/{$identifier}");
            $pokemonData = $pokemonResponse->toArray();

            // Récupère les données de l'espèce
            $speciesResponse = $this->httpClient->request('GET', $pokemonData['species']['url']);
            $speciesData = $speciesResponse->toArray();

            // Récupère les données des types
            $typesData = $this->fetchTypesData($pokemonData['types']);

            // Récupère la chaîne d'évolution
            $evolutionChainResponse = $this->httpClient->request('GET', $speciesData['evolution_chain']['url']);
            $evolutionChainData = $evolutionChainResponse->toArray();

            return PokemonDTO::fromApiResponse($pokemonData, $speciesData, $typesData, $evolutionChainData);
        });
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
