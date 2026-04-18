<?php

namespace App\PokeApiClient\DTO\Pokemon\Sprites\SpritesVersions;

use App\PokeApiClient\DTO\Pokemon\Sprites\PokemonSpritesDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationIV
{
    #[SerializedName('diamond-pearl')]
    public PokemonSpritesDTO $diamondPearl;

    #[SerializedName('heartgold-soulsilver')]
    public PokemonSpritesDTO $heartgoldSoulsilver;

    public PokemonSpritesDTO $platinum;
}
