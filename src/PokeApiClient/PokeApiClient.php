<?php

namespace App\PokeApiClient;

use App\PokeApiClient\DTO\Common\ResourceDTO;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PokeApiClient
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly SerializerInterface $serializer,
        private readonly string $baseUrl = 'https://pokeapi.co/api/v2/',
    ) {
    }

    public function getAllPokemons(): array
    {
        $response = $this->httpClient->request(
            'GET',
            "$this->baseUrl/pokemon?limit=10000"
        );
        $data = $response->toArray();

        return $data['results'];
    }

    /**
     * @template DTO
     * @param class-string<DTO> $dtoClass
     * @return DTO
     */
    public function get(string $dtoClass, string|int $identifier): mixed
    {
        $response = $this->httpClient->request(
            'GET',
            "$this->baseUrl{$dtoClass::getEndpoint()}/$identifier"
        );
        $data = $response->getContent();

        return $this->serializer->deserialize(
            data: $data,
            type: $dtoClass,
            format: 'json',
        );
    }

    /**
     * @template DTO
     *
     * @param class-string<DTO> $dtoClass
     *
     * @return DTO
     */
    public function getFromResource(string $dtoClass, ResourceDTO $resource): mixed
    {
        $response = $this->httpClient->request('GET', $resource->url);
        $data = $response->getContent();

        return $this->serializer->deserialize(
            data: $data,
            type: $dtoClass,
            format: 'json',
        );
    }
}
