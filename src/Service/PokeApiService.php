<?php

namespace App\Service;

use App\Generated\PokeApi\Client;
use App\Generated\PokeApi\Model\PokemonDetail;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PokeApiService
{
    public function __construct(
        private readonly Client $apiClient,
        private readonly HttpClientInterface $httpClient,
        private readonly SerializerInterface $serializer,
        private readonly string $pokeApiUrl = 'https://pokeapi.co/api/v2/',
    ) {
    }

    /**
     * @return PokemonDetail[]
     */
    public function getPokemonsByRegion(string $region = 'national', int $page = 1, int $perPage = 20): array
    {
        $pokemonList = $this->apiClient->listPokemon();

        $pokemons = [];
        foreach ($pokemonList->getResults() as $summary) {
            $pokemons[] = $this->apiClient->getPokemon($summary->getName());
        }

        return $pokemons;
    }

    public function getPokemon(string|int $identifier): array
    {
        $pokemon = $this->apiClient->getPokemon($identifier);

        $species = $this->apiClient->getPokemonSpecies($pokemon->getSpecies()->getName());

        $types = [];
        foreach ($pokemon->getTypes() as $slot) {
            $types[] = $this->apiClient->getType($slot->getType()->getName());
        }

        $evoChainId = basename($species->getEvolutionChain()->getUrl(), '/');
        $evolutionChain = $this->apiClient->getEvolutionChain($evoChainId);

        return [
            'pokemon' => $pokemon,
            'species' => $species,
            'types' => $types,
            'evolutionChain' => $evolutionChain,
        ];
    }
}
