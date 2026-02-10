<?php

namespace App\DTO\ApiPokemonSpecies;

use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonSpeciesDexEntryDTO
{
    #[SerializedName('entry_number')]
    public int $entryNumber;

    public NamedResourceDTO $pokedex;
}
