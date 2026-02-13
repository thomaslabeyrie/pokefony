<?php

namespace App\Generated\PokeApi\Endpoint;

class ListPokemonForm extends \App\Generated\PokeApi\Runtime\Client\BaseEndpoint implements \App\Generated\PokeApi\Runtime\Client\Endpoint
{
    use \App\Generated\PokeApi\Runtime\Client\EndpointTrait;

    /**
     * Some Pokémon may appear in one of multiple, visually different forms. These differences are purely cosmetic. For variations within a Pokémon species, which do differ in more than just visuals, the 'Pokémon' entity is used to represent such a variety.
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
        return '/api/v2/pokemon-form/';
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
     * @return \App\Generated\PokeApi\Model\PaginatedPokemonFormSummaryList|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos(strtolower($contentType), 'application/json'))) {
            return $serializer->deserialize($body, 'App\Generated\PokeApi\Model\PaginatedPokemonFormSummaryList', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['cookieAuth', 'basicAuth'];
    }
}
