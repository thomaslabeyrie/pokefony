<?php

namespace App\DTO\ApiPokemon\HeldItem;

use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonHeldItemDTO
{
    #[Groups(['pokemon'])]
    public NamedResourceDTO $item;

    /** @var PokemonHeldItemVersionDTO[] */
    #[Groups(['pokemon'])]
    #[SerializedName('version_details')]
    public array $versionDetails;
}
