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

    public function getMinLevel(): int
    {
        return $this->minLevel;
    }

    public function setMinLevel(int $minLevel): self
    {
        $this->initialized['minLevel'] = true;
        $this->minLevel = $minLevel;

        return $this;
    }

    public function getMaxLevel(): int
    {
        return $this->maxLevel;
    }

    public function setMaxLevel(int $maxLevel): self
    {
        $this->initialized['maxLevel'] = true;
        $this->maxLevel = $maxLevel;

        return $this;
    }

    public function getConditionValues(): LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsConditionValues
    {
        return $this->conditionValues;
    }

    public function setConditionValues(LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsConditionValues $conditionValues): self
    {
        $this->initialized['conditionValues'] = true;
        $this->conditionValues = $conditionValues;

        return $this;
    }

    public function getChance(): int
    {
        return $this->chance;
    }

    public function setChance(int $chance): self
    {
        $this->initialized['chance'] = true;
        $this->chance = $chance;

        return $this;
    }

    public function getMethod(): LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsMethod
    {
        return $this->method;
    }

    public function setMethod(LocationAreaDetailPokemonEncountersItemVersionDetailsItemEncounterDetailsMethod $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;

        return $this;
    }
}
