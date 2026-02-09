<?php

namespace App\DTO\ApiPokemon;

use App\DTO\ApiPokemon\Common\NamedResource;
use Symfony\Component\Serializer\Attribute\Groups;

class PastAbility
{
    #[Groups(['pokemon'])]
    public NamedResource $generation;

    /** @var Ability[] */
    #[Groups(['pokemon'])]
    public array $abilities;
}
