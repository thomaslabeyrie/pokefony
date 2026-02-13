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

    public function getRarity(): int
    {
        return $this->rarity;
    }

    public function setRarity(int $rarity): self
    {
        $this->initialized['rarity'] = true;
        $this->rarity = $rarity;

        return $this;
    }

    public function getVersion(): ItemDetailHeldByPokemonItemVersionDetailsItemVersion
    {
        return $this->version;
    }

    public function setVersion(ItemDetailHeldByPokemonItemVersionDetailsItemVersion $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }
}
