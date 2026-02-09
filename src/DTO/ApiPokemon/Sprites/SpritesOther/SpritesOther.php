<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesOther;

use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class SpritesOther
{
    #[Groups(['pokemon'])]
    #[SerializedName('dream_world')]
    public DreamWorld $dreamWorld;

    #[Groups(['pokemon'])]
    public Home $home;

    #[Groups(['pokemon', 'pokedex'])]
    #[SerializedName('official-artwork')]
    public OfficialArtwork $officialArtwork;

    #[Groups(['pokemon'])]
    public Showdown $showdown;
}
