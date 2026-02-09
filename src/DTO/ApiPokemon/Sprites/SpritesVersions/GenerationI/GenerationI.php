<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationI;

use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationI
{
    #[Groups(['pokemon'])]
    #[SerializedName('red-blue')]
    public RedBlue $redBlue;

    #[Groups(['pokemon'])]
    public Yellow $yellow;
}
