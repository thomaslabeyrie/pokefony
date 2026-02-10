<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions;

use App\DTO\ApiPokemon\Sprites\PokemonSpritesDTO;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationVI
{
    #[Groups(['pokemon'])]
    #[SerializedName('omegaruby-alphasapphire')]
    public PokemonSpritesDTO $omegarubyAlphasapphire;

    #[Groups(['pokemon'])]
    #[SerializedName('x-y')]
    public PokemonSpritesDTO $xY;
}
