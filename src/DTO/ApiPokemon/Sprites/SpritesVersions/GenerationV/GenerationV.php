<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationV;

use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationV
{
    #[Groups(['pokemon'])]
    #[SerializedName('black-white')]
    public BlackWhite $blackWhite;
}
