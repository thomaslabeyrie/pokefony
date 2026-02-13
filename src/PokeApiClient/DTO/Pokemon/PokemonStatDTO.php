<?php

namespace App\PokeApiClient\DTO\Pokemon;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonStatDTO
{
    #[Groups(['pokemon'])]
    #[SerializedName('base_stat')]
    public int $baseStat;

    #[Groups(['pokemon'])]
    public int $effort;

    #[Groups(['pokemon'])]
    public NamedResourceDTO $stat;
}
