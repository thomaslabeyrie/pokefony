<?php

namespace App\PokeApiClient\DTO\PokemonSpecies;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonSpeciesDexEntryDTO
{
    #[SerializedName('entry_number')]
    public int $entryNumber;

    public NamedResourceDTO $pokedex;
}
