<?php

namespace App\PokeApiClient\DTO\Type;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;

class TypePokemonDTO
{
    public int $slot;

    public NamedResourceDTO $pokemon;
}
