<?php

namespace App\Generated\PokeApi\Model;

class PokemonDetailHeldItemsItem extends \ArrayObject
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
     * @var PokemonDetailHeldItemsItemItem
     */
    protected $item;
    /**
     * @var list<PokemonDetailHeldItemsItemVersionDetailsItem>
     */
    protected $versionDetails;
    /**
     * @return PokemonDetailHeldItemsItemItem
     */
    public function getItem(): PokemonDetailHeldItemsItemItem
    {
        return $this->item;
    }
    /**
     * @param PokemonDetailHeldItemsItemItem $item
     *
     * @return self
     */
    public function setItem(PokemonDetailHeldItemsItemItem $item): self
    {
        $this->initialized['item'] = true;
        $this->item = $item;
        return $this;
    }
    /**
     * @return list<PokemonDetailHeldItemsItemVersionDetailsItem>
     */
    public function getVersionDetails(): array
    {
        return $this->versionDetails;
    }
    /**
     * @param list<PokemonDetailHeldItemsItemVersionDetailsItem> $versionDetails
     *
     * @return self
     */
    public function setVersionDetails(array $versionDetails): self
    {
        $this->initialized['versionDetails'] = true;
        $this->versionDetails = $versionDetails;
        return $this;
    }
}