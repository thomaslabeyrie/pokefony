<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationIV;

use Symfony\Component\Serializer\Attribute\SerializedName;

class DiamondPearl
{
    #[SerializedName('back_default')]
    public ?string $backDefault;

    #[SerializedName('back_female')]
    public ?string $backFemale;

    #[SerializedName('back_shiny')]
    public ?string $backShiny;

    #[SerializedName('back_shiny_female')]
    public ?string $backShinyFemale;

    #[SerializedName('front_default')]
    public ?string $frontDefault;

    #[SerializedName('front_female')]
    public ?string $frontFemale;

    #[SerializedName('front_shiny')]
    public ?string $frontShiny;

    #[SerializedName('front_shiny_female')]
    public ?string $frontShinyFemale;
}
