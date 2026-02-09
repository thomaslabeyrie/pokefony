<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationIII;

use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class Emerald
{
    #[Groups(['pokemon'])]
    #[SerializedName('front_default')]
    public ?string $frontDefault;

    #[Groups(['pokemon'])]
    #[SerializedName('front_shiny')]
    public ?string $frontShiny;
}
