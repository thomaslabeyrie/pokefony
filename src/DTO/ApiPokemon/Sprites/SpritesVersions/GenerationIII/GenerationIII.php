<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationIII;

use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationIII
{
    #[Groups(['pokemon'])]
    public Emerald $emerald;

    #[Groups(['pokemon'])]
    #[SerializedName('firered-leafgreen')]
    public FireredLeafgreen $fireredLeafgreen;

    #[Groups(['pokemon'])]
    #[SerializedName('ruby-sapphire')]
    public RubySapphire $rubySapphire;
}
