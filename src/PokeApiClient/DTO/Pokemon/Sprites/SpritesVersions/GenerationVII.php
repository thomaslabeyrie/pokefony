<?php

namespace App\PokeApiClient\DTO\Pokemon\Sprites\SpritesVersions;

use App\PokeApiClient\DTO\Pokemon\Sprites\PokemonSpritesDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationVII
{
    public PokemonSpritesDTO $icons;

    #[SerializedName('ultra-sun-ultra-moon')]
    public PokemonSpritesDTO $ultraSunUltraMoon;
}
