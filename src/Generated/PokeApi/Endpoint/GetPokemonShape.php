<?php

namespace App\Generated\PokeApi\Endpoint;

class GetPokemonShape extends \App\Generated\PokeApi\Runtime\Client\BaseEndpoint implements \App\Generated\PokeApi\Runtime\Client\Endpoint
{
    use \App\Generated\PokeApi\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * Shapes used for sorting Pokémon in a Pokédex.
     *
     * @param string $id this parameter can be a string or an integer
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/api/v2/pokemon-shape/{id}/');
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
     * @return \App\Generated\PokeApi\Model\PokemonShapeDetail|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'App\Generated\PokeApi\Model\PokemonShapeDetail', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['cookieAuth', 'basicAuth'];
    }
}
