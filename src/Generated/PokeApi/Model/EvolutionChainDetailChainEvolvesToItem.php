<?php

namespace App\Generated\PokeApi\Model;

class EvolutionChainDetailChainEvolvesToItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItem>
     */
    protected $evolutionDetails;
    /**
     * @var bool
     */
    protected $isBaby;
    /**
     * @var EvolutionChainDetailChainEvolvesToItemSpecies
     */
    protected $species;

    /**
     * @return list<EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItem>
     */
    public function getEvolutionDetails(): array
    {
        return $this->evolutionDetails;
    }

    /**
     * @param list<EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItem> $evolutionDetails
     */
    public function setEvolutionDetails(array $evolutionDetails): self
    {
        $this->initialized['evolutionDetails'] = true;
        $this->evolutionDetails = $evolutionDetails;

        return $this;
    }

    public function getIsBaby(): bool
    {
        return $this->isBaby;
    }

    public function setIsBaby(bool $isBaby): self
    {
        $this->initialized['isBaby'] = true;
        $this->isBaby = $isBaby;

        return $this;
    }

    public function getSpecies(): EvolutionChainDetailChainEvolvesToItemSpecies
    {
        return $this->species;
    }

    public function setSpecies(EvolutionChainDetailChainEvolvesToItemSpecies $species): self
    {
        $this->initialized['species'] = true;
        $this->species = $species;

        return $this;
    }
}
