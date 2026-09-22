<?php

namespace App\PokeApiClient\DTO\PokemonSpecies;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonSpeciesVarietyDTO
{
    #[SerializedName('is_default')]
    public bool $isDefault;

    public NamedResourceDTO $pokemon;
}
