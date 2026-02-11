<?php

namespace App\Generated\PokeApi\Model;

class ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItem extends \ArrayObject
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
     * @var list<ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItem>
     */
    protected $encounterDetails;
    /**
     * @var float
     */
    protected $maxChance;
    /**
     * @var ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemVersion
     */
    protected $version;
    /**
     * @return list<ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItem>
     */
    public function getEncounterDetails(): array
    {
        return $this->encounterDetails;
    }
    /**
     * @param list<ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemEncounterDetailsItem> $encounterDetails
     *
     * @return self
     */
    public function setEncounterDetails(array $encounterDetails): self
    {
        $this->initialized['encounterDetails'] = true;
        $this->encounterDetails = $encounterDetails;
        return $this;
    }
    /**
     * @return float
     */
    public function getMaxChance(): float
    {
        return $this->maxChance;
    }
    /**
     * @param float $maxChance
     *
     * @return self
     */
    public function setMaxChance(float $maxChance): self
    {
        $this->initialized['maxChance'] = true;
        $this->maxChance = $maxChance;
        return $this;
    }
    /**
     * @return ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemVersion
     */
    public function getVersion(): ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemVersion
    {
        return $this->version;
    }
    /**
     * @param ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemVersion $version
     *
     * @return self
     */
    public function setVersion(ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItemVersion $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}