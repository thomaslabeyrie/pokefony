<?php

namespace App\PokeApiClient\DTO\Pokedex;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonEntryDTO
{
    #[SerializedName('entry_number')]
    public int $entryNumber;

    #[SerializedName('pokemon_species')]
    public NamedResourceDTO $pokemonSpecies;
}
