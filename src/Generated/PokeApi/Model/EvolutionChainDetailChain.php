<?php

namespace App\Generated\PokeApi\Model;

class EvolutionChainDetailChain extends \ArrayObject
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
     * @var list<mixed>
     */
    protected $evolutionDetails;
    /**
     * @var list<EvolutionChainDetailChainEvolvesToItem>
     */
    protected $evolvesTo;
    /**
     * @var bool
     */
    protected $isBaby;
    /**
     * @var EvolutionChainDetailChainSpecies
     */
    protected $species;

    /**
     * @return list<mixed>
     */
    public function getEvolutionDetails(): array
    {
        return $this->evolutionDetails;
    }

    /**
     * @param list<mixed> $evolutionDetails
     */
    public function setEvolutionDetails(array $evolutionDetails): self
    {
        $this->initialized['evolutionDetails'] = true;
        $this->evolutionDetails = $evolutionDetails;

        return $this;
    }

    /**
     * @return list<EvolutionChainDetailChainEvolvesToItem>
     */
    public function getEvolvesTo(): array
    {
        return $this->evolvesTo;
    }

    /**
     * @param list<EvolutionChainDetailChainEvolvesToItem> $evolvesTo
     */
    public function setEvolvesTo(array $evolvesTo): self
    {
        $this->initialized['evolvesTo'] = true;
        $this->evolvesTo = $evolvesTo;

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

    public function getSpecies(): EvolutionChainDetailChainSpecies
    {
        return $this->species;
    }

    public function setSpecies(EvolutionChainDetailChainSpecies $species): self
    {
        $this->initialized['species'] = true;
        $this->species = $species;

        return $this;
    }
}
