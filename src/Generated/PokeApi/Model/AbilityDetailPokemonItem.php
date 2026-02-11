<?php

namespace App\Generated\PokeApi\Model;

class AbilityDetailPokemonItem extends \ArrayObject
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
     * @var bool
     */
    protected $isHidden;
    /**
     * @var int
     */
    protected $slot;
    /**
     * @var AbilityDetailPokemonItemPokemon
     */
    protected $pokemon;
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
    /**
     * @return AbilityDetailPokemonItemPokemon
     */
    public function getPokemon(): AbilityDetailPokemonItemPokemon
    {
        return $this->pokemon;
    }
    /**
     * @param AbilityDetailPokemonItemPokemon $pokemon
     *
     * @return self
     */
    public function setPokemon(AbilityDetailPokemonItemPokemon $pokemon): self
    {
        $this->initialized['pokemon'] = true;
        $this->pokemon = $pokemon;
        return $this;
    }
}