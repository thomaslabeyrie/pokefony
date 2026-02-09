<?php

namespace App\DTO\ApiPokemon;

use Symfony\Component\Serializer\Attribute\Groups;

class Form
{
    #[Groups(['pokemon'])]
    public string $name;

    #[Groups(['pokemon'])]
    public string $url;
}
