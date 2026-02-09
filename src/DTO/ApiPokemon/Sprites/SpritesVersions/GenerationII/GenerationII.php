<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationII;

use Symfony\Component\Serializer\Attribute\Groups;

class GenerationII
{
    #[Groups(['pokemon'])]
    public Crystal $crystal;

    #[Groups(['pokemon'])]
    public Gold $gold;

    #[Groups(['pokemon'])]
    public Silver $silver;
}
