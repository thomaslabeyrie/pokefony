<?php

namespace App\DTO\ApiPokemon\Move;

use App\DTO\ApiPokemon\Common\NamedResource;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class VersionGroupDetail
{
    #[Groups(['pokemon'])]
    public ?int $order;

    #[Groups(['pokemon'])]
    #[SerializedName('level_learned_at')]
    public int $levelLearnedAt;

    #[Groups(['pokemon'])]
    #[SerializedName('version_group')]
    public NamedResource $versionGroup;

    #[Groups(['pokemon'])]
    #[SerializedName('move_learn_method')]
    public NamedResource $moveLearnMethod;
}
