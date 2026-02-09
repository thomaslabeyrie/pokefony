<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationI;

use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class RedBlue
{
    #[Groups(['pokemon'])]
    #[SerializedName('back_default')]
    public ?string $backDefault;

    #[Groups(['pokemon'])]
    #[SerializedName('back_gray')]
    public ?string $backGray;

    #[Groups(['pokemon'])]
    #[SerializedName('front_default')]
    public ?string $frontDefault;

    #[Groups(['pokemon'])]
    #[SerializedName('front_gray')]
    public ?string $frontGray;
}
