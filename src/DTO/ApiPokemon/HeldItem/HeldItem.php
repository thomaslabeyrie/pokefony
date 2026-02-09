<?php

namespace App\DTO\ApiPokemon\HeldItem;

use App\DTO\ApiPokemon\Common\NamedResource;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class HeldItem
{
    #[Groups(['pokemon'])]
    public NamedResource $item;

    /** @var VersionDetail[] */
    #[Groups(['pokemon'])]
    #[SerializedName('version_details')]
    public array $versionDetails;
}
