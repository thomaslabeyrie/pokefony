<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesOther;

use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class OfficialArtwork
{
    #[Groups(['pokemon', 'pokedex'])]
    #[SerializedName('front_default')]
    public ?string $frontDefault;

    #[Groups(['pokemon'])]
    #[SerializedName('front_shiny')]
    public ?string $frontShiny;
}
