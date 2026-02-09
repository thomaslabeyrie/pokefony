<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions;

use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class Icons
{
    #[Groups(['pokemon'])]
    #[SerializedName('front_default')]
    public ?string $frontDefault;

    #[Groups(['pokemon'])]
    #[SerializedName('front_female')]
    public ?string $frontFemale;
}
