<?php

namespace App\DTO\ApiPokemon\Common;

use Symfony\Component\Serializer\Attribute\Groups;

class NamedResource
{
    #[Groups(['pokemon', 'pokedex'])]
    public string $name;

    #[Groups(['pokemon'])]
    public string $url;
}
