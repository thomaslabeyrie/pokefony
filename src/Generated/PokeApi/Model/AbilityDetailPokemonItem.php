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

    public function getPokemon(): AbilityDetailPokemonItemPokemon
    {
        return $this->pokemon;
    }

    public function setPokemon(AbilityDetailPokemonItemPokemon $pokemon): self
    {
        $this->initialized['pokemon'] = true;
        $this->pokemon = $pokemon;

        return $this;
    }
}
