<?php

namespace App\PokeApiClient\DTO\Evolution;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use App\PokeApiClient\DTO\PokeApiEndpointDtoInterface;
use Symfony\Component\Serializer\Attribute\SerializedName;

class EvolutionChainDTO implements PokeApiEndpointDtoInterface
{
    public int $id;

    #[SerializedName('baby_trigger_item')]
    public ?NamedResourceDTO $babyTriggerItem = null;

    public ChainLinkDTO $chain;

    public function getEndpoint(): string
    {
        return 'evolution-chain';
    }
}
