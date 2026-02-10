<?php

namespace App\DTO\ApiPokemon;

use Symfony\Component\Serializer\Attribute\Groups;

class PokemonCriesDTO
{
    #[Groups(['pokemon'])]
    public string $latest;

    #[Groups(['pokemon'])]
    public string $legacy;
}
