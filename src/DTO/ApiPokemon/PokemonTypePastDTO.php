<?php

namespace App\DTO\ApiPokemon;

use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\Groups;

class PokemonTypePastDTO
{
    #[Groups(['pokemon'])]
    public NamedResourceDTO $generation;

    /** @var PokemonTypeDTO[] */
    #[Groups(['pokemon'])]
    public array $types;
}
