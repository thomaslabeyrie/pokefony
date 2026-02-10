<?php

namespace App\DTO\ApiPokemon;

use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\Groups;

class PokemonAbilityPastDTO
{
    #[Groups(['pokemon'])]
    public NamedResourceDTO $generation;

    /** @var PokemonAbilityDTO[] */
    #[Groups(['pokemon'])]
    public array $abilities;
}
