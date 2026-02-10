<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions;

use App\DTO\ApiPokemon\Sprites\PokemonSpritesDTO;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationI
{
    #[Groups(['pokemon'])]
    #[SerializedName('red-blue')]
    public PokemonSpritesDTO $redBlue;

    #[Groups(['pokemon'])]
    public PokemonSpritesDTO $yellow;
}
