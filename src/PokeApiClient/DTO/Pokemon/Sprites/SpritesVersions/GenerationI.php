<?php

namespace App\PokeApiClient\DTO\Pokemon\Sprites\SpritesVersions;

use App\PokeApiClient\DTO\Pokemon\Sprites\PokemonSpritesDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationI
{
    #[SerializedName('red-blue')]
    public PokemonSpritesDTO $redBlue;

    public PokemonSpritesDTO $yellow;
}
