<?php

namespace App\DTO\ApiPokemon;

use Symfony\Component\Serializer\Attribute\Groups;

class Cries
{
    #[Groups(['pokemon'])]
    public string $latest;

    #[Groups(['pokemon'])]
    public string $legacy;
}
