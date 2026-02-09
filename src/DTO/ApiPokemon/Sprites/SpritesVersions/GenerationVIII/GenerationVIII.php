<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationVIII;

use App\DTO\ApiPokemon\Sprites\SpritesVersions\Icons;
use Symfony\Component\Serializer\Attribute\Groups;

class GenerationVIII
{
    #[Groups(['pokemon'])]
    public Icons $icons;
}
