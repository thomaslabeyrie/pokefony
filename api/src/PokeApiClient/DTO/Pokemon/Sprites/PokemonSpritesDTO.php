<?php

namespace App\PokeApiClient\DTO\Pokemon\Sprites;

use App\PokeApiClient\DTO\Pokemon\Sprites\SpritesVersions\SpritesVersions;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonSpritesDTO
{
    // Front
    #[SerializedName('front_default')]
    public ?string $frontDefault = null;

    #[SerializedName('front_female')]
    public ?string $frontFemale = null;

    #[SerializedName('front_shiny')]
    public ?string $frontShiny = null;

    #[SerializedName('front_shiny_female')]
    public ?string $frontShinyFemale = null;

    #[SerializedName('front_gray')]
    public ?string $frontGray = null;

    #[SerializedName('front_transparent')]
    public ?string $frontTransparent = null;

    #[SerializedName('front_shiny_transparent')]
    public ?string $frontShinyTransparent = null;

    // Back
    #[SerializedName('back_default')]
    public ?string $backDefault = null;

    #[SerializedName('back_female')]
    public ?string $backFemale = null;

    #[SerializedName('back_shiny')]
    public ?string $backShiny = null;

    #[SerializedName('back_shiny_female')]
    public ?string $backShinyFemale = null;

    #[SerializedName('back_gray')]
    public ?string $backGray = null;

    #[SerializedName('back_transparent')]
    public ?string $backTransparent = null;

    #[SerializedName('back_shiny_transparent')]
    public ?string $backShinyTransparent = null;

    // Other
    public ?PokemonSpritesOtherDTO $other = null;

    public ?SpritesVersions $versions = null;

    public ?PokemonSpritesDTO $animated = null;

    public ?PokemonSpritesDTO $icons = null;
}
