<?php

namespace App\PokeApiClient\DTO\Pokemon;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonMoveVersionDTO
{
    #[SerializedName('move_learn_method')]
    public NamedResourceDTO $moveLearnMethod;

    #[SerializedName('version_group')]
    public NamedResourceDTO $versionGroup;

    #[SerializedName('level_learned_at')]
    public int $levelLearnedAt;

    public ?int $order;

    #[SerializedName('enhancement_level')]
    public ?int $enhancementLevel;
}
