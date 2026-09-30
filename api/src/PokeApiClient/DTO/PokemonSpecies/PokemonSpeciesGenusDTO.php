<?php

namespace App\PokeApiClient\DTO\PokemonSpecies;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;

class PokemonSpeciesGenusDTO
{
    public string $genus;

    public NamedResourceDTO $language;
}
