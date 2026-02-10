<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions;

use App\DTO\ApiPokemon\Sprites\PokemonSpritesDTO;
use Symfony\Component\Serializer\Attribute\Groups;

class GenerationVIII
{
    #[Groups(['pokemon'])]
    public PokemonSpritesDTO $icons;
}
