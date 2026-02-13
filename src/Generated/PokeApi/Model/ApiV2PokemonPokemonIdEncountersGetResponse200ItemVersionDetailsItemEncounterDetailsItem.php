<?php

namespace App\Generated\PokeApi\Model;

class ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItem extends \ArrayObject
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
     * @var float
     */
    protected $chance;
    /**
     * @var list<ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemConditionValuesItem>
     */
    protected $conditionValues;
    /**
     * @var float
     */
    protected $maxLevel;
    /**
     * @var ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemMethod
     */
    protected $method;
    /**
     * @var float
     */
    protected $minLevel;

    public function getChance(): float
    {
        return $this->chance;
    }

    public function setChance(float $chance): self
    {
        $this->initialized['chance'] = true;
        $this->chance = $chance;

        return $this;
    }

    /**
     * @return list<ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemConditionValuesItem>
     */
    public function getConditionValues(): array
    {
        return $this->conditionValues;
    }

    /**
     * @param list<ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemConditionValuesItem> $conditionValues
     */
    public function setConditionValues(array $conditionValues): self
    {
        $this->initialized['conditionValues'] = true;
        $this->conditionValues = $conditionValues;

        return $this;
    }

    public function getMaxLevel(): float
    {
        return $this->maxLevel;
    }

    public function setMaxLevel(float $maxLevel): self
    {
        $this->initialized['maxLevel'] = true;
        $this->maxLevel = $maxLevel;

        return $this;
    }

    public function getMethod(): ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemMethod
    {
        return $this->method;
    }

    public function setMethod(ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemMethod $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;

        return $this;
    }

    public function getMinLevel(): float
    {
        return $this->minLevel;
    }

    public function setMinLevel(float $minLevel): self
    {
        $this->initialized['minLevel'] = true;
        $this->minLevel = $minLevel;

        return $this;
    }
}
