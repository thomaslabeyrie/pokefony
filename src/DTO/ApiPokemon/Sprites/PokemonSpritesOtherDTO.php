<?php

namespace App\DTO\ApiPokemon\Sprites;

use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonSpritesOtherDTO
{
    #[Groups(['pokemon'])]
    #[SerializedName('dream_world')]
    public PokemonSpritesDTO $dreamWorld;

    #[Groups(['pokemon'])]
    public PokemonSpritesDTO $home;

    #[Groups(['pokemon', 'pokedex'])]
    #[SerializedName('official-artwork')]
    public PokemonSpritesDTO $officialArtwork;

    #[Groups(['pokemon'])]
    public PokemonSpritesDTO $showdown;
}
