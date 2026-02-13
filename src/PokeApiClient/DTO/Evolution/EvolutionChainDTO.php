<?php

namespace App\PokeApiClient\DTO\Evolution;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class EvolutionChainDTO
{
    public int $id;

    #[SerializedName('baby_trigger_item')]
    public ?NamedResourceDTO $babyTriggerItem = null;

    public ChainLinkDTO $chain;
}
