<?php

namespace App\Generated\PokeApi\Endpoint;

class ListCharacteristic extends \App\Generated\PokeApi\Runtime\Client\BaseEndpoint implements \App\Generated\PokeApi\Runtime\Client\Endpoint
{
    use \App\Generated\PokeApi\Runtime\Client\EndpointTrait;

    /**
     * Characteristics indicate which stat contains a Pokémon's highest IV. A Pokémon's Characteristic is determined by the remainder of its highest IV divided by 5 (gene_modulo). Check out [Bulbapedia](http://bulbapedia.bulbagarden.net/wiki/Characteristic) for greater detail.
     *
     * @param array{
     *    "limit"?: int, //Number of results to return per page.
     *    "offset"?: int, //The initial index from which to return the results.
     *    "q"?: string, //> Only available locally and not at [pokeapi.co](https://pokeapi.co/docs/v2)
     * Case-insensitive query applied on the `name` property.
     * } $queryParameters
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/api/v2/characteristic/';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['limit', 'offset', 'q']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('offset', ['int']);
        $optionsResolver->addAllowedTypes('q', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \App\Generated\PokeApi\Model\PaginatedCharacteristicSummaryList|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'App\Generated\PokeApi\Model\PaginatedCharacteristicSummaryList', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['cookieAuth', 'basicAuth'];
    }
}
