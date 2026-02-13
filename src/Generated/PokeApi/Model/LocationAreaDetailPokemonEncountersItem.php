<?php

namespace App\Generated\PokeApi\Model;

class LocationAreaDetailPokemonEncountersItem extends \ArrayObject
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
     * @var LocationAreaDetailPokemonEncountersItemPokemon
     */
    protected $pokemon;
    /**
     * @var list<LocationAreaDetailPokemonEncountersItemVersionDetailsItem>
     */
    protected $versionDetails;

    public function getPokemon(): LocationAreaDetailPokemonEncountersItemPokemon
    {
        return $this->pokemon;
    }

    public function setPokemon(LocationAreaDetailPokemonEncountersItemPokemon $pokemon): self
    {
        $this->initialized['pokemon'] = true;
        $this->pokemon = $pokemon;

        return $this;
    }

    /**
     * @return list<LocationAreaDetailPokemonEncountersItemVersionDetailsItem>
     */
    public function getVersionDetails(): array
    {
        return $this->versionDetails;
    }

    /**
     * @param list<LocationAreaDetailPokemonEncountersItemVersionDetailsItem> $versionDetails
     */
    public function setVersionDetails(array $versionDetails): self
    {
        $this->initialized['versionDetails'] = true;
        $this->versionDetails = $versionDetails;

        return $this;
    }
}
