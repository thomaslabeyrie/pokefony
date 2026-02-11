<?php

namespace App\Generated\PokeApi\Model;

class PokemonSpeciesDetailVarietiesItem extends \ArrayObject
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
    protected $isDefault;
    /**
     * @var PokemonSpeciesDetailVarietiesItemPokemon
     */
    protected $pokemon;
    /**
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }
    /**
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault): self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * @return PokemonSpeciesDetailVarietiesItemPokemon
     */
    public function getPokemon(): PokemonSpeciesDetailVarietiesItemPokemon
    {
        return $this->pokemon;
    }
    /**
     * @param PokemonSpeciesDetailVarietiesItemPokemon $pokemon
     *
     * @return self
     */
    public function setPokemon(PokemonSpeciesDetailVarietiesItemPokemon $pokemon): self
    {
        $this->initialized['pokemon'] = true;
        $this->pokemon = $pokemon;
        return $this;
    }
}