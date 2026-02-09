<?php

namespace App\DTO\ApiPokemon;

use App\DTO\ApiPokemon\Common\NamedResource;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class Stat
{
    #[Groups(['pokemon'])]
    #[SerializedName('base_stat')]
    public int $baseStat;

    #[Groups(['pokemon'])]
    public int $effort;

    #[Groups(['pokemon'])]
    public NamedResource $stat;
}
