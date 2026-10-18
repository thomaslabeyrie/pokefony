<?php

namespace App\PokeApiClient\DTO\Common;

class ResourceListDTO
{
    public int $count;

    public ?string $next;

    public ?string $previous;

    /** @var ResourceDTO[] */
    public array $results;
}
