<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions;

use App\DTO\ApiPokemon\Sprites\PokemonSpritesDTO;
use Symfony\Component\Serializer\Attribute\Groups;

class GenerationII
{
    #[Groups(['pokemon'])]
    public PokemonSpritesDTO $crystal;

    #[Groups(['pokemon'])]
    public PokemonSpritesDTO $gold;

    #[Groups(['pokemon'])]
    public PokemonSpritesDTO $silver;
}
