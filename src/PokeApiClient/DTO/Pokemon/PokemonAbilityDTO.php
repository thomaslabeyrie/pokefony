<?php

namespace App\PokeApiClient\DTO\Pokemon;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonAbilityDTO
{
    #[SerializedName('is_hidden')]
    public bool $isHidden;

    public int $slot;

    public NamedResourceDTO $ability;
}
