<?php

namespace App\PokeApiClient\DTO\Pokemon;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;

class PokemonTypeDTO
{
    public int $slot;

    public NamedResourceDTO $type;
}
