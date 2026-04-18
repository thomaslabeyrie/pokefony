<?php

namespace App\PokeApiClient\DTO\Pokemon\Sprites;

use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonSpritesOtherDTO
{
    #[SerializedName('dream_world')]
    public PokemonSpritesDTO $dreamWorld;

    public PokemonSpritesDTO $home;

    #[SerializedName('official-artwork')]
    public PokemonSpritesDTO $officialArtwork;

    public PokemonSpritesDTO $showdown;
}
