<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationIV;

use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class Platinum
{
    #[Groups(['pokemon'])]
    #[SerializedName('back_default')]
    public ?string $backDefault;

    #[Groups(['pokemon'])]
    #[SerializedName('back_female')]
    public ?string $backFemale;

    #[Groups(['pokemon'])]
    #[SerializedName('back_shiny')]
    public ?string $backShiny;

    #[Groups(['pokemon'])]
    #[SerializedName('back_shiny_female')]
    public ?string $backShinyFemale;

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
