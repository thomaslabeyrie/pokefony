<?php

namespace App\PokeApiClient\DTO\Pokemon\Sprites;

use App\PokeApiClient\DTO\Pokemon\Sprites\SpritesVersions\SpritesVersions;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonSpritesDTO
{
    // Front
    #[Groups(['pokemon'])]
    #[SerializedName('front_default')]
    public string $frontDefault;

    #[Groups(['pokemon'])]
    #[SerializedName('front_female')]
    public ?string $frontFemale = null;

    #[Groups(['pokemon'])]
    #[SerializedName('front_shiny')]
    public ?string $frontShiny = null;

    #[Groups(['pokemon'])]
    #[SerializedName('front_shiny_female')]
    public ?string $frontShinyFemale = null;

    #[Groups(['pokemon'])]
    #[SerializedName('front_gray')]
    public ?string $frontGray = null;

    #[Groups(['pokemon'])]
    #[SerializedName('front_transparent')]
    public ?string $frontTransparent = null;

    #[Groups(['pokemon'])]
    #[SerializedName('front_shiny_transparent')]
    public ?string $frontShinyTransparent = null;

    // Back
    #[Groups(['pokemon'])]
    #[SerializedName('back_default')]
    public ?string $backDefault = null;

    #[Groups(['pokemon'])]
    #[SerializedName('back_female')]
    public ?string $backFemale = null;

    #[Groups(['pokemon'])]
    #[SerializedName('back_shiny')]
    public ?string $backShiny = null;

    #[Groups(['pokemon'])]
    #[SerializedName('back_shiny_female')]
    public ?string $backShinyFemale = null;

    #[Groups(['pokemon'])]
    #[SerializedName('back_gray')]
    public ?string $backGray = null;

    #[Groups(['pokemon'])]
    #[SerializedName('back_transparent')]
    public ?string $backTransparent = null;

    #[Groups(['pokemon'])]
    #[SerializedName('back_shiny_transparent')]
    public ?string $backShinyTransparent = null;

    // Other
    #[Groups(['pokemon', 'pokedex'])]
    public ?PokemonSpritesOtherDTO $other = null;

    #[Groups(['pokemon'])]
    public ?SpritesVersions $versions = null;

    #[Groups(['pokemon'])]
    public ?PokemonSpritesDTO $animated = null;

    #[Groups(['pokemon'])]
    public ?PokemonSpritesDTO $icons = null;
}
