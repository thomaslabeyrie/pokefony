<?php

namespace App\PokeApiClient\DTO\Common;

class NamedResourceListDTO extends ResourceListDTO
{
    /** @var NamedResourceDTO[] */
    public array $results;
}
