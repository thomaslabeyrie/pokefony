<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions;

use App\DTO\ApiPokemon\Sprites\PokemonSpritesDTO;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationVII
{
    #[Groups(['pokemon'])]
    public PokemonSpritesDTO $icons;

    #[Groups(['pokemon'])]
    #[SerializedName('ultra-sun-ultra-moon')]
    public PokemonSpritesDTO $ultraSunUltraMoon;
}
