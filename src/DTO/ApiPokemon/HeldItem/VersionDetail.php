<?php

namespace App\DTO\ApiPokemon\HeldItem;

use App\DTO\ApiPokemon\Common\NamedResource;
use Symfony\Component\Serializer\Attribute\Groups;

class VersionDetail
{
    #[Groups(['pokemon'])]
    public int $rarity;

    #[Groups(['pokemon'])]
    public NamedResource $version;
}
