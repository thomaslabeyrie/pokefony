<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationVII;

use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class UltraSunUltraMoon
{
    #[Groups(['pokemon'])]
    #[SerializedName('front_default')]
    public ?string $frontDefault;

    #[Groups(['pokemon'])]
    #[SerializedName('front_female')]
    public ?string $frontFemale;

    #[Groups(['pokemon'])]
    #[SerializedName('front_shiny')]
    public ?string $frontShiny;

    #[Groups(['pokemon'])]
    #[SerializedName('front_shiny_female')]
    public ?string $frontShinyFemale;
}
