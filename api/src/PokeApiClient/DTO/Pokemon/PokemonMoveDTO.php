<?php

namespace App\PokeApiClient\DTO\Pokemon;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonMoveDTO
{
    public NamedResourceDTO $move;

    #[SerializedName('version_group_details')]
    /** @var PokemonMoveVersionDTO[] */
    public array $versionGroupDetails;
}
