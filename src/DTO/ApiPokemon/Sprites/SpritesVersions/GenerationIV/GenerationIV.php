<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationIV;

use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationIV
{
    #[Groups(['pokemon'])]
    #[SerializedName('diamond-pearl')]
    public DiamondPearl $diamondPearl;

    #[Groups(['pokemon'])]
    #[SerializedName('heartgold-soulsilver')]
    public HeartgoldSoulsilver $heartgoldSoulsilver;

    #[Groups(['pokemon'])]
    public Platinum $platinum;
}
