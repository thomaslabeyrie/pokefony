<?php

namespace App\Generated\PokeApi\Model;

class PokemonDetailAbilitiesItem extends \ArrayObject
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
     * @var PokemonDetailAbilitiesItemAbility
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
    /**
     * @return PokemonDetailAbilitiesItemAbility
     */
    public function getAbility(): PokemonDetailAbilitiesItemAbility
    {
        return $this->ability;
    }
    /**
     * @param PokemonDetailAbilitiesItemAbility $ability
     *
     * @return self
     */
    public function setAbility(PokemonDetailAbilitiesItemAbility $ability): self
    {
        $this->initialized['ability'] = true;
        $this->ability = $ability;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsHidden(): bool
    {
        return $this->isHidden;
    }
    /**
     * @param bool $isHidden
     *
     * @return self
     */
    public function setIsHidden(bool $isHidden): self
    {
        $this->initialized['isHidden'] = true;
        $this->isHidden = $isHidden;
        return $this;
    }
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
}