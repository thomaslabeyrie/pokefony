<?php

namespace App\DTO\ApiEvolution;

use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class ChainLinkDTO
{
    #[SerializedName('is_baby')]
    private bool $isBaby;

    private NamedResourceDTO $species;

    /** @var EvolutionDetailDTO[] */
    #[SerializedName('evolution_details')]
    private array $evolutionDetails = [];

    /** @var ChainLinkDTO[] */
    #[SerializedName('evolves_to')]
    private array $evolvesTo = [];

    public function isBaby(): bool
    {
        return $this->isBaby;
    }

    public function setIsBaby(bool $isBaby): self
    {
        $this->isBaby = $isBaby;

        return $this;
    }

    public function getSpecies(): NamedResourceDTO
    {
        return $this->species;
    }

    public function setSpecies(NamedResourceDTO $species): self
    {
        $this->species = $species;

        return $this;
    }

    /**
     * @return EvolutionDetailDTO[]
     */
    public function getEvolutionDetails(): array
    {
        return $this->evolutionDetails;
    }

    /**
     * @param EvolutionDetailDTO[] $evolutionDetails
     */
    public function setEvolutionDetails(array $evolutionDetails): self
    {
        $this->evolutionDetails = $evolutionDetails;

        return $this;
    }

    /**
     * @return ChainLinkDTO[]
     */
    public function getEvolvesTo(): array
    {
        return $this->evolvesTo;
    }

    /**
     * @param ChainLinkDTO[] $evolvesTo
     */
    public function setEvolvesTo(array $evolvesTo): self
    {
        $this->evolvesTo = $evolvesTo;

        return $this;
    }
}
