<?php

namespace App\PokeApiClient\DTO\Pokemon;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonStatDTO
{
    #[SerializedName('base_stat')]
    public int $baseStat;

    public int $effort;

    public NamedResourceDTO $stat;
}
