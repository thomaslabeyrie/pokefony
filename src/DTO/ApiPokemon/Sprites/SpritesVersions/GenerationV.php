<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions;

use App\DTO\ApiPokemon\Sprites\PokemonSpritesDTO;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationV
{
    #[Groups(['pokemon'])]
    #[SerializedName('black-white')]
    public PokemonSpritesDTO $blackWhite;
}
