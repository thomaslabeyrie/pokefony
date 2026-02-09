<?php

namespace App\DTO\ApiPokemon;

use App\DTO\ApiPokemon\Common\NamedResource;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GameIndex
{
    #[Groups(['pokemon'])]
    #[SerializedName('game_index')]
    public int $gameIndex;

    #[Groups(['pokemon'])]
    public NamedResource $version;
}
