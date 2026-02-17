<?php

namespace App\PokeApiClient;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use App\PokeApiClient\DTO\Common\ResourceDTO;
use App\PokeApiClient\DTO\PokeApiEndpointDtoInterface;
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

    public function get(PokeApiEndpointDtoInterface $DTO, string|int $identifier)
    {
        $response = $this->httpClient->request(
            'GET',
            "$this->baseUrl{$DTO->getEndpoint()}/$identifier"
        );
        $data = $response->getContent();

        return $this->serializer->deserialize(
            data: $data,
            type: $DTO::class,
            format: 'json',
        );
    }


    // /**
    //  * Usage : $this->pokeApiClient->getFromResource($resource, PokemonDTO::class);
    //  *
    //  * @template T
    //  * @param class-string<T> $dtoClass
    //  * @return T
    //  */
    // public function getFromResource(ResourceDTO $resource, string $dtoClass): mixed
    public function getFromResource(ResourceDTO|NamedResourceDTO $resource, PokeApiEndpointDtoInterface $DTO)
    {
        $response = $this->httpClient->request('GET', $resource->url);
        $data = $response->getContent();

        return $this->serializer->deserialize(
            data: $data,
            // type: $dtoClass
            type: $DTO::class,
            format: 'json',
        );
    }
}
