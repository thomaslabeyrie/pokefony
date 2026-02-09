<?php

namespace App\DTO\ApiPokemon;

use App\DTO\ApiPokemon\Common\NamedResource;
use Symfony\Component\Serializer\Attribute\Groups;

class Type
{
    #[Groups(['pokemon'])]
    public int $slot;

    #[Groups(['pokemon', 'pokedex'])]
    public NamedResource $type;
}
