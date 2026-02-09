<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationVI;

use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationVI
{
    #[Groups(['pokemon'])]
    #[SerializedName('omegaruby-alphasapphire')]
    public OmegarubyAlphasapphire $omegarubyAlphasapphire;

    #[Groups(['pokemon'])]
    #[SerializedName('x-y')]
    public XY $xY;
}
