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
    /**
     * @return float
     */
    public function getChance(): float
    {
        return $this->chance;
    }
    /**
     * @param float $chance
     *
     * @return self
     */
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
     *
     * @return self
     */
    public function setConditionValues(array $conditionValues): self
    {
        $this->initialized['conditionValues'] = true;
        $this->conditionValues = $conditionValues;
        return $this;
    }
    /**
     * @return float
     */
    public function getMaxLevel(): float
    {
        return $this->maxLevel;
    }
    /**
     * @param float $maxLevel
     *
     * @return self
     */
    public function setMaxLevel(float $maxLevel): self
    {
        $this->initialized['maxLevel'] = true;
        $this->maxLevel = $maxLevel;
        return $this;
    }
    /**
     * @return ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemMethod
     */
    public function getMethod(): ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemMethod
    {
        return $this->method;
    }
    /**
     * @param ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemMethod $method
     *
     * @return self
     */
    public function setMethod(ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItemMethod $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
        return $this;
    }
    /**
     * @return float
     */
    public function getMinLevel(): float
    {
        return $this->minLevel;
    }
    /**
     * @param float $minLevel
     *
     * @return self
     */
    public function setMinLevel(float $minLevel): self
    {
        $this->initialized['minLevel'] = true;
        $this->minLevel = $minLevel;
        return $this;
    }
}