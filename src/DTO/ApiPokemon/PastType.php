<?php

namespace App\DTO\ApiPokemon;

use App\DTO\ApiPokemon\Common\NamedResource;
use Symfony\Component\Serializer\Attribute\Groups;

class PastType
{
    #[Groups(['pokemon'])]
    public NamedResource $generation;

    /** @var Type[] */
    #[Groups(['pokemon'])]
    public array $types;
}
