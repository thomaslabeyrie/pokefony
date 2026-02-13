<?php

namespace App\PokeApiClient\DTO\Common;

use Symfony\Component\Serializer\Attribute\Groups;

class NamedResourceDTO
{
    #[Groups(['pokemon', 'pokedex'])]
    public string $name;

    #[Groups(['pokemon'])]
    public string $url;
}
