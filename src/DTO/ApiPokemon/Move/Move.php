<?php

namespace App\DTO\ApiPokemon\Move;

use App\DTO\ApiPokemon\Common\NamedResource;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class Move
{
    #[Groups(['pokemon'])]
    public NamedResource $move;

    /** @var VersionGroupDetail[] */
    #[Groups(['pokemon'])]
    #[SerializedName('version_group_details')]
    public array $versionGroupDetails;

}
