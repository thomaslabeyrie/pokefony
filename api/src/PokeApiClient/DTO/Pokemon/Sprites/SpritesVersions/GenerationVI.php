<?php

namespace App\PokeApiClient\DTO\Pokemon\Sprites\SpritesVersions;

use App\PokeApiClient\DTO\Pokemon\Sprites\PokemonSpritesDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationVI
{
    #[SerializedName('omegaruby-alphasapphire')]
    public PokemonSpritesDTO $omegarubyAlphasapphire;

    #[SerializedName('x-y')]
    public PokemonSpritesDTO $xY;
}
