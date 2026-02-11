<?php

namespace App\Generated\PokeApi\Model;

class PokemonFormDetailTypesItem extends \ArrayObject
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
     * @var PokemonFormDetailTypesItemType
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
     * @return PokemonFormDetailTypesItemType
     */
    public function getType(): PokemonFormDetailTypesItemType
    {
        return $this->type;
    }
    /**
     * @param PokemonFormDetailTypesItemType $type
     *
     * @return self
     */
    public function setType(PokemonFormDetailTypesItemType $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}