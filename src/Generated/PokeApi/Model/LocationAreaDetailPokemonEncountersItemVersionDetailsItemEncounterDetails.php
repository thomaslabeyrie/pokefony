<?php

namespace App\Generated\PokeApi\Model;

class LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetails extends \ArrayObject
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
     * @var int
     */
    protected $minLevel;
    /**
     * @var int
     */
    protected $maxLevel;
    /**
     * @var LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsConditionValues
     */
    protected $conditionValues;
    /**
     * @var int
     */
    protected $chance;
    /**
     * @var LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsMethod
     */
    protected $method;
    /**
     * @return int
     */
    public function getMinLevel(): int
    {
        return $this->minLevel;
    }
    /**
     * @param int $minLevel
     *
     * @return self
     */
    public function setMinLevel(int $minLevel): self
    {
        $this->initialized['minLevel'] = true;
        $this->minLevel = $minLevel;
        return $this;
    }
    /**
     * @return int
     */
    public function getMaxLevel(): int
    {
        return $this->maxLevel;
    }
    /**
     * @param int $maxLevel
     *
     * @return self
     */
    public function setMaxLevel(int $maxLevel): self
    {
        $this->initialized['maxLevel'] = true;
        $this->maxLevel = $maxLevel;
        return $this;
    }
    /**
     * @return LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsConditionValues
     */
    public function getConditionValues(): LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsConditionValues
    {
        return $this->conditionValues;
    }
    /**
     * @param LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsConditionValues $conditionValues
     *
     * @return self
     */
    public function setConditionValues(LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsConditionValues $conditionValues): self
    {
        $this->initialized['conditionValues'] = true;
        $this->conditionValues = $conditionValues;
        return $this;
    }
    /**
     * @return int
     */
    public function getChance(): int
    {
        return $this->chance;
    }
    /**
     * @param int $chance
     *
     * @return self
     */
    public function setChance(int $chance): self
    {
        $this->initialized['chance'] = true;
        $this->chance = $chance;
        return $this;
    }
    /**
     * @return LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsMethod
     */
    public function getMethod(): LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsMethod
    {
        return $this->method;
    }
    /**
     * @param LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsMethod $method
     *
     * @return self
     */
    public function setMethod(LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsMethod $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
        return $this;
    }
}