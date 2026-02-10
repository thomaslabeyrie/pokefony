<?php

namespace App\DTO\ApiPokemon\Move;

use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonMoveDTO
{
    #[Groups(['pokemon'])]
    public NamedResourceDTO $move;

    /** @var PokemonMoveVersionDTO[] */
    #[Groups(['pokemon'])]
    #[SerializedName('version_group_details')]
    public array $versionGroupDetails;

}
