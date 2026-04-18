<?php

namespace App\PokeApiClient\DTO\Evolution;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use App\PokeApiClient\DTO\Common\NameDTO;

class EvolutionTriggerDTO
{
    public int $id;

    public string $name;

    /** @var NameDTO[] */
    public array $names;

    /** @var NamedResourceDTO[] */
    public array $pokemonSpecies;
}
