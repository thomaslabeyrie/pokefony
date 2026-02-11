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
     *
     * @return self
     */
    public function setEvolutionDetails(array $evolutionDetails): self
    {
        $this->initialized['evolutionDetails'] = true;
        $this->evolutionDetails = $evolutionDetails;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsBaby(): bool
    {
        return $this->isBaby;
    }
    /**
     * @param bool $isBaby
     *
     * @return self
     */
    public function setIsBaby(bool $isBaby): self
    {
        $this->initialized['isBaby'] = true;
        $this->isBaby = $isBaby;
        return $this;
    }
    /**
     * @return EvolutionChainDetailChainEvolvesToItemSpecies
     */
    public function getSpecies(): EvolutionChainDetailChainEvolvesToItemSpecies
    {
        return $this->species;
    }
    /**
     * @param EvolutionChainDetailChainEvolvesToItemSpecies $species
     *
     * @return self
     */
    public function setSpecies(EvolutionChainDetailChainEvolvesToItemSpecies $species): self
    {
        $this->initialized['species'] = true;
        $this->species = $species;
        return $this;
    }
}