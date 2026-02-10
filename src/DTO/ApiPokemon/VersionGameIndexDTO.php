<?php

namespace App\DTO\ApiPokemon;

use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class VersionGameIndexDTO
{
    #[Groups(['pokemon'])]
    #[SerializedName('game_index')]
    public int $gameIndex;

    #[Groups(['pokemon'])]
    public NamedResourceDTO $version;
}
