<?php

namespace App\Generated\PokeApi\Model;

class PokemonDetailPastAbilitiesItem extends \ArrayObject
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
     * @var list<PokemonDetailPastAbilitiesItemAbilitiesItem>
     */
    protected $abilities;
    /**
     * @var PokemonDetailPastAbilitiesItemGeneration
     */
    protected $generation;

    /**
     * @return list<PokemonDetailPastAbilitiesItemAbilitiesItem>
     */
    public function getAbilities(): array
    {
        return $this->abilities;
    }

    /**
     * @param list<PokemonDetailPastAbilitiesItemAbilitiesItem> $abilities
     */
    public function setAbilities(array $abilities): self
    {
        $this->initialized['abilities'] = true;
        $this->abilities = $abilities;

        return $this;
    }

    public function getGeneration(): PokemonDetailPastAbilitiesItemGeneration
    {
        return $this->generation;
    }

    public function setGeneration(PokemonDetailPastAbilitiesItemGeneration $generation): self
    {
        $this->initialized['generation'] = true;
        $this->generation = $generation;

        return $this;
    }
}
