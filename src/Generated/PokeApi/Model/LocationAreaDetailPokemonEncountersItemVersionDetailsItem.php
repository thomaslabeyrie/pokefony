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
    /**
     * @return LocationAreaDetailPokemonEncountersItemVersionDetailsItemVersion
     */
    public function getVersion(): LocationAreaDetailPokemonEncountersItemVersionDetailsItemVersion
    {
        return $this->version;
    }
    /**
     * @param LocationAreaDetailPokemonEncountersItemVersionDetailsItemVersion $version
     *
     * @return self
     */
    public function setVersion(LocationAreaDetailPokemonEncountersItemVersionDetailsItemVersion $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * @return int
     */
    public function getMaxChance(): int
    {
        return $this->maxChance;
    }
    /**
     * @param int $maxChance
     *
     * @return self
     */
    public function setMaxChance(int $maxChance): self
    {
        $this->initialized['maxChance'] = true;
        $this->maxChance = $maxChance;
        return $this;
    }
    /**
     * @return LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetails
     */
    public function getEncounterDetails(): LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetails
    {
        return $this->encounterDetails;
    }
    /**
     * @param LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetails $encounterDetails
     *
     * @return self
     */
    public function setEncounterDetails(LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetails $encounterDetails): self
    {
        $this->initialized['encounterDetails'] = true;
        $this->encounterDetails = $encounterDetails;
        return $this;
    }
}