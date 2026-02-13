<?php

namespace App\Generated\PokeApi\Endpoint;

class GetGeneration extends \App\Generated\PokeApi\Runtime\Client\BaseEndpoint implements \App\Generated\PokeApi\Runtime\Client\Endpoint
{
    use \App\Generated\PokeApi\Runtime\Client\EndpointTrait;
    protected $id;

    /**
     * A generation is a grouping of the Pokémon games that separates them based on the Pokémon they include. In each generation, a new set of Pokémon, Moves, Abilities and Types that did not exist in the previous generation are released.
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
        return str_replace(['{id}'], [$this->id], '/api/v2/generation/{id}/');
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
     * @return \App\Generated\PokeApi\Model\GenerationDetail|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'App\Generated\PokeApi\Model\GenerationDetail', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['cookieAuth', 'basicAuth'];
    }
}
