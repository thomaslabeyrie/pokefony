<?php

namespace App\Generated\PokeApi\Model;

class PokemonDetailPastAbilitiesItemAbilitiesItem extends \ArrayObject
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
     * @var PokemonDetailPastAbilitiesItemAbilitiesItemAbility
     */
    protected $ability;
    /**
     * @var bool
     */
    protected $isHidden;
    /**
     * @var int
     */
    protected $slot;

    public function getAbility(): PokemonDetailPastAbilitiesItemAbilitiesItemAbility
    {
        return $this->ability;
    }

    public function setAbility(PokemonDetailPastAbilitiesItemAbilitiesItemAbility $ability): self
    {
        $this->initialized['ability'] = true;
        $this->ability = $ability;

        return $this;
    }

    public function getIsHidden(): bool
    {
        return $this->isHidden;
    }

    public function setIsHidden(bool $isHidden): self
    {
        $this->initialized['isHidden'] = true;
        $this->isHidden = $isHidden;

        return $this;
    }

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
}
