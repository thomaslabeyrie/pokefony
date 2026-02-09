<?php

namespace App\DTO\ApiPokemon;

use Symfony\Component\Serializer\Attribute\Groups;

class Species
{
    #[Groups(['pokemon'])]
    public string $name;

    #[Groups(['pokemon'])]
    public string $url;
}
