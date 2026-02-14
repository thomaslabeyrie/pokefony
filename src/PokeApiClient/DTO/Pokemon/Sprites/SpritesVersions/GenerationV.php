<?php

namespace App\PokeApiClient\DTO\Pokemon\Sprites\SpritesVersions;

use App\PokeApiClient\DTO\Pokemon\Sprites\PokemonSpritesDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationV
{
    #[SerializedName('black-white')]
    public PokemonSpritesDTO $blackWhite;
}
