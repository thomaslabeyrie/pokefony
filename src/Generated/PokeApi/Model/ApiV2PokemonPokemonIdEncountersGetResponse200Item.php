<?php

namespace App\Generated\PokeApi\Model;

class ApiV2PokemonPokemonIdEncountersGetResponse200Item extends \ArrayObject
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
     * @var ApiV2PokemonPokemonIdEncountersGetResponse200ItemLocationArea
     */
    protected $locationArea;
    /**
     * @var list<ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItem>
     */
    protected $versionDetails;

    public function getLocationArea(): ApiV2PokemonPokemonIdEncountersGetResponse200ItemLocationArea
    {
        return $this->locationArea;
    }

    public function setLocationArea(ApiV2PokemonPokemonIdEncountersGetResponse200ItemLocationArea $locationArea): self
    {
        $this->initialized['locationArea'] = true;
        $this->locationArea = $locationArea;

        return $this;
    }

    /**
     * @return list<ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItem>
     */
    public function getVersionDetails(): array
    {
        return $this->versionDetails;
    }

    /**
     * @param list<ApiV2PokemonPokemonIdEncountersGetResponse200ItemVersionDetailsItem> $versionDetails
     */
    public function setVersionDetails(array $versionDetails): self
    {
        $this->initialized['versionDetails'] = true;
        $this->versionDetails = $versionDetails;

        return $this;
    }
}
