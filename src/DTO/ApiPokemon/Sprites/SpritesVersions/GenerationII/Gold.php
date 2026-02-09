<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationII;

use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class Gold
{
    #[Groups(['pokemon'])]
    #[SerializedName('back_default')]
    public ?string $backDefault;

    #[Groups(['pokemon'])]
    #[SerializedName('back_shiny')]
    public ?string $backShiny;

    #[Groups(['pokemon'])]
    #[SerializedName('front_default')]
    public ?string $frontDefault;

    #[Groups(['pokemon'])]
    #[SerializedName('front_shiny')]
    public ?string $frontShiny;
}
