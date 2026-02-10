<?php

namespace App\DTO\ApiPokemon\HeldItem;

use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\Groups;

class PokemonHeldItemVersionDTO
{
    #[Groups(['pokemon'])]
    public int $rarity;

    #[Groups(['pokemon'])]
    public NamedResourceDTO $version;
}
