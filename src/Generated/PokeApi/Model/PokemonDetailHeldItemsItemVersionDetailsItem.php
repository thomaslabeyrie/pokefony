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

    public function getVersion(): PokemonDetailHeldItemsItemVersionDetailsItemVersion
    {
        return $this->version;
    }

    public function setVersion(PokemonDetailHeldItemsItemVersionDetailsItemVersion $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }
}
