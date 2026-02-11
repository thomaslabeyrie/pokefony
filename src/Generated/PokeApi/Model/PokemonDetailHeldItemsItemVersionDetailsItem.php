<?php

namespace App\Generated\PokeApi\Model;

class PokemonDetailHeldItemsItemVersionDetailsItem extends \ArrayObject
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
    protected $rarity;
    /**
     * @var PokemonDetailHeldItemsItemVersionDetailsItemVersion
     */
    protected $version;
    /**
     * @return int
     */
    public function getRarity(): int
    {
        return $this->rarity;
    }
    /**
     * @param int $rarity
     *
     * @return self
     */
    public function setRarity(int $rarity): self
    {
        $this->initialized['rarity'] = true;
        $this->rarity = $rarity;
        return $this;
    }
    /**
     * @return PokemonDetailHeldItemsItemVersionDetailsItemVersion
     */
    public function getVersion(): PokemonDetailHeldItemsItemVersionDetailsItemVersion
    {
        return $this->version;
    }
    /**
     * @param PokemonDetailHeldItemsItemVersionDetailsItemVersion $version
     *
     * @return self
     */
    public function setVersion(PokemonDetailHeldItemsItemVersionDetailsItemVersion $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}