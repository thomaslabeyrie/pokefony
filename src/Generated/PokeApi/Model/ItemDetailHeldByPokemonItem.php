<?php

namespace App\Generated\PokeApi\Model;

class ItemDetailHeldByPokemonItem extends \ArrayObject
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
     * @var ItemDetailHeldByPokemonItemPokemon
     */
    protected $pokemon;
    /**
     * @var list<ItemDetailHeldByPokemonItemVersionDetailsItem>
     */
    protected $versionDetails;

    public function getPokemon(): ItemDetailHeldByPokemonItemPokemon
    {
        return $this->pokemon;
    }

    public function setPokemon(ItemDetailHeldByPokemonItemPokemon $pokemon): self
    {
        $this->initialized['pokemon'] = true;
        $this->pokemon = $pokemon;

        return $this;
    }

    /**
     * @return list<ItemDetailHeldByPokemonItemVersionDetailsItem>
     */
    public function getVersionDetails(): array
    {
        return $this->versionDetails;
    }

    /**
     * @param list<ItemDetailHeldByPokemonItemVersionDetailsItem> $versionDetails
     */
    public function setVersionDetails(array $versionDetails): self
    {
        $this->initialized['versionDetails'] = true;
        $this->versionDetails = $versionDetails;

        return $this;
    }
}
