<?php

namespace App\Generated\PokeApi\Model;

class ItemDetailHeldByPokemonItemVersionDetailsItem extends \ArrayObject
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
     * @var ItemDetailHeldByPokemonItemVersionDetailsItemVersion
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
     * @return ItemDetailHeldByPokemonItemVersionDetailsItemVersion
     */
    public function getVersion(): ItemDetailHeldByPokemonItemVersionDetailsItemVersion
    {
        return $this->version;
    }
    /**
     * @param ItemDetailHeldByPokemonItemVersionDetailsItemVersion $version
     *
     * @return self
     */
    public function setVersion(ItemDetailHeldByPokemonItemVersionDetailsItemVersion $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}