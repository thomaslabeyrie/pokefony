<?php

namespace App\PokeApiClient\DTO\Pokemon;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\Groups;

class PokemonTypeDTO
{
    #[Groups(['pokemon'])]
    public int $slot;

    #[Groups(['pokemon', 'pokedex'])]
    public NamedResourceDTO $type;
}
