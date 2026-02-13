<?php

namespace App\Generated\PokeApi\Endpoint;

class GetPokemonEncounters extends \App\Generated\PokeApi\Runtime\Client\BaseEndpoint implements \App\Generated\PokeApi\Runtime\Client\Endpoint
{
    use \App\Generated\PokeApi\Runtime\Client\EndpointTrait;
    protected $pokemon_id;

    /**
     * Handles Pokemon Encounters as a sub-resource.
     */
    public function __construct(string $pokemonId)
    {
        $this->pokemon_id = $pokemonId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{pokemon_id}'], [$this->pokemon_id], '/api/v2/pokemon/{pokemon_id}/encounters');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return \App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200Item[]|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'App\Generated\PokeApi\Model\ApiV2PokemonPokemonIdEncountersGetResponse200Item[]', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['cookieAuth', 'basicAuth'];
    }
}
