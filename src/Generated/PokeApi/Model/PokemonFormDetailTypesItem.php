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

    public function getSlot(): int
    {
        return $this->slot;
    }

    public function setSlot(int $slot): self
    {
        $this->initialized['slot'] = true;
        $this->slot = $slot;

        return $this;
    }

    public function getType(): PokemonFormDetailTypesItemType
    {
        return $this->type;
    }

    public function setType(PokemonFormDetailTypesItemType $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
