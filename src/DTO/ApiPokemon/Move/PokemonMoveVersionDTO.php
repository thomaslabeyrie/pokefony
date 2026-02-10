<?php

namespace App\DTO\ApiPokemon\Move;

use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonMoveVersionDTO
{
    #[Groups(['pokemon'])]
    public ?int $order;

    #[Groups(['pokemon'])]
    #[SerializedName('level_learned_at')]
    public int $levelLearnedAt;

    #[Groups(['pokemon'])]
    #[SerializedName('version_group')]
    public NamedResourceDTO $versionGroup;

    #[Groups(['pokemon'])]
    #[SerializedName('move_learn_method')]
    public NamedResourceDTO $moveLearnMethod;
}
