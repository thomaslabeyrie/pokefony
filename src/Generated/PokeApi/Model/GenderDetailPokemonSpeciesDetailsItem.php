<?php

namespace App\Generated\PokeApi\Model;

class GenderDetailPokemonSpeciesDetailsItem extends \ArrayObject
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
    protected $rate;
    /**
     * @var GenderDetailPokemonSpeciesDetailsItemPokemonSpecies
     */
    protected $pokemonSpecies;
    /**
     * @return int
     */
    public function getRate(): int
    {
        return $this->rate;
    }
    /**
     * @param int $rate
     *
     * @return self
     */
    public function setRate(int $rate): self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;
        return $this;
    }
    /**
     * @return GenderDetailPokemonSpeciesDetailsItemPokemonSpecies
     */
    public function getPokemonSpecies(): GenderDetailPokemonSpeciesDetailsItemPokemonSpecies
    {
        return $this->pokemonSpecies;
    }
    /**
     * @param GenderDetailPokemonSpeciesDetailsItemPokemonSpecies $pokemonSpecies
     *
     * @return self
     */
    public function setPokemonSpecies(GenderDetailPokemonSpeciesDetailsItemPokemonSpecies $pokemonSpecies): self
    {
        $this->initialized['pokemonSpecies'] = true;
        $this->pokemonSpecies = $pokemonSpecies;
        return $this;
    }
}