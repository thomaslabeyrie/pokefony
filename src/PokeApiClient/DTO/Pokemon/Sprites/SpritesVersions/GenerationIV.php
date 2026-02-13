<?php

namespace App\PokeApiClient\DTO\Pokemon\Sprites\SpritesVersions;

use App\PokeApiClient\DTO\Pokemon\Sprites\PokemonSpritesDTO;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationIV
{
    #[Groups(['pokemon'])]
    #[SerializedName('diamond-pearl')]
    public PokemonSpritesDTO $diamondPearl;

    #[Groups(['pokemon'])]
    #[SerializedName('heartgold-soulsilver')]
    public PokemonSpritesDTO $heartgoldSoulsilver;

    #[Groups(['pokemon'])]
    public PokemonSpritesDTO $platinum;
}
