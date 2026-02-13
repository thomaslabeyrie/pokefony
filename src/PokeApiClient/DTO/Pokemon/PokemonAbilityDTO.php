<?php

namespace App\PokeApiClient\DTO\Pokemon;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonAbilityDTO
{
    #[Groups(['pokemon'])]
    #[SerializedName('is_hidden')]
    public bool $isHidden;

    #[Groups(['pokemon'])]
    public int $slot;

    #[Groups(['pokemon'])]
    public NamedResourceDTO $ability;
}
