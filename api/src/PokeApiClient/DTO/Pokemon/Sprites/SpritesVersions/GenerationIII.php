<?php

namespace App\PokeApiClient\DTO\Pokemon\Sprites\SpritesVersions;

use App\PokeApiClient\DTO\Pokemon\Sprites\PokemonSpritesDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationIII
{
    public PokemonSpritesDTO $emerald;

    #[SerializedName('firered-leafgreen')]
    public PokemonSpritesDTO $fireredLeafgreen;

    #[SerializedName('ruby-sapphire')]
    public PokemonSpritesDTO $rubySapphire;
}
