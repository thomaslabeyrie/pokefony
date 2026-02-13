<?php

namespace App\Generated\PokeApi\Model;

class TypeDetailPokemonItem extends \ArrayObject
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
     * @var TypeDetailPokemonItemPokemon
     */
    protected $pokemon;

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

    public function getPokemon(): TypeDetailPokemonItemPokemon
    {
        return $this->pokemon;
    }

    public function setPokemon(TypeDetailPokemonItemPokemon $pokemon): self
    {
        $this->initialized['pokemon'] = true;
        $this->pokemon = $pokemon;

        return $this;
    }
}
