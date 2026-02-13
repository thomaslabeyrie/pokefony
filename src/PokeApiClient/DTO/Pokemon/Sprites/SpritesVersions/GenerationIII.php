<?php

namespace App\PokeApiClient\DTO\Pokemon\Sprites\SpritesVersions;

use App\PokeApiClient\DTO\Pokemon\Sprites\PokemonSpritesDTO;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationIII
{
    #[Groups(['pokemon'])]
    public PokemonSpritesDTO $emerald;

    #[Groups(['pokemon'])]
    #[SerializedName('firered-leafgreen')]
    public PokemonSpritesDTO $fireredLeafgreen;

    #[Groups(['pokemon'])]
    #[SerializedName('ruby-sapphire')]
    public PokemonSpritesDTO $rubySapphire;
}
