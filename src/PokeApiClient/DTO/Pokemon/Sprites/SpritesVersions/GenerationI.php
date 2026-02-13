<?php

namespace App\PokeApiClient\DTO\Pokemon\Sprites\SpritesVersions;

use App\PokeApiClient\DTO\Pokemon\Sprites\PokemonSpritesDTO;
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
