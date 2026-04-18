<?php

namespace App\PokeApiClient\DTO\Common;

use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationGameIndexDTO
{
    #[SerializedName('game_index')]
    public int $gameIndex;

    public NamedResourceDTO $generation;
}
