<?php

namespace App\Generated\PokeApi\Model;

class LocationAreaDetailPokemonEncountersItemVersionDetailsItem extends \ArrayObject
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
     * @var LocationAreaDetailPokemonEncountersItemVersionDetailsItemVersion
     */
    protected $version;
    /**
     * @var int
     */
    protected $maxChance;
    /**
     * @var LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetails
     */
    protected $encounterDetails;

    public function getVersion(): LocationAreaDetailPokemonEncountersItemVersionDetailsItemVersion
    {
        return $this->version;
    }

    public function setVersion(LocationAreaDetailPokemonEncountersItemVersionDetailsItemVersion $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }

    public function getMaxChance(): int
    {
        return $this->maxChance;
    }

    public function setMaxChance(int $maxChance): self
    {
        $this->initialized['maxChance'] = true;
        $this->maxChance = $maxChance;

        return $this;
    }

    public function getEncounterDetails(): LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetails
    {
        return $this->encounterDetails;
    }

    public function setEncounterDetails(LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetails $encounterDetails): self
    {
        $this->initialized['encounterDetails'] = true;
        $this->encounterDetails = $encounterDetails;

        return $this;
    }
}
