<?php

namespace App\PokeApiClient\DTO\Evolution;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class ChainLinkDTO
{
    #[SerializedName('is_baby')]
    public bool $isBaby;

    public NamedResourceDTO $species;

    /** @var EvolutionDetailDTO[] */
    #[SerializedName('evolution_details')]
    public array $evolutionDetails = [];

    /** @var ChainLinkDTO[] */
    #[SerializedName('evolves_to')]
    public array $evolvesTo = [];
}
