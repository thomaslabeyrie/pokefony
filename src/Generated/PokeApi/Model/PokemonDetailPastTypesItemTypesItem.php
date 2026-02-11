<?php

namespace App\Generated\PokeApi\Model;

class PokemonDetailPastTypesItemTypesItem extends \ArrayObject
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
    protected $slot;
    /**
     * @var PokemonDetailPastTypesItemTypesItemType
     */
    protected $type;
    /**
     * @return int
     */
    public function getSlot(): int
    {
        return $this->slot;
    }
    /**
     * @param int $slot
     *
     * @return self
     */
    public function setSlot(int $slot): self
    {
        $this->initialized['slot'] = true;
        $this->slot = $slot;
        return $this;
    }
    /**
     * @return PokemonDetailPastTypesItemTypesItemType
     */
    public function getType(): PokemonDetailPastTypesItemTypesItemType
    {
        return $this->type;
    }
    /**
     * @param PokemonDetailPastTypesItemTypesItemType $type
     *
     * @return self
     */
    public function setType(PokemonDetailPastTypesItemTypesItemType $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}