<?php

namespace App\PokeApiClient\DTO\Pokemon\Sprites\SpritesVersions;

use App\PokeApiClient\DTO\Pokemon\Sprites\PokemonSpritesDTO;
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
