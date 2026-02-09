<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationVII;

use App\DTO\ApiPokemon\Sprites\SpritesVersions\Icons;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationVII
{
    #[Groups(['pokemon'])]
    public Icons $icons;

    #[Groups(['pokemon'])]
    #[SerializedName('ultra-sun-ultra-moon')]
    public UltraSunUltraMoon $ultraSunUltraMoon;
}
