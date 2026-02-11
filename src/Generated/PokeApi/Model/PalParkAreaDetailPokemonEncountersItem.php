<?php

namespace App\Generated\PokeApi\Model;

class PalParkAreaDetailPokemonEncountersItem extends \ArrayObject
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
    protected $baseScore;
    /**
     * @var PalParkAreaDetailPokemonEncountersItemPokemonSpecies
     */
    protected $pokemonSpecies;
    /**
     * @var int
     */
    protected $rate;
    /**
     * @return int
     */
    public function getBaseScore(): int
    {
        return $this->baseScore;
    }
    /**
     * @param int $baseScore
     *
     * @return self
     */
    public function setBaseScore(int $baseScore): self
    {
        $this->initialized['baseScore'] = true;
        $this->baseScore = $baseScore;
        return $this;
    }
    /**
     * @return PalParkAreaDetailPokemonEncountersItemPokemonSpecies
     */
    public function getPokemonSpecies(): PalParkAreaDetailPokemonEncountersItemPokemonSpecies
    {
        return $this->pokemonSpecies;
    }
    /**
     * @param PalParkAreaDetailPokemonEncountersItemPokemonSpecies $pokemonSpecies
     *
     * @return self
     */
    public function setPokemonSpecies(PalParkAreaDetailPokemonEncountersItemPokemonSpecies $pokemonSpecies): self
    {
        $this->initialized['pokemonSpecies'] = true;
        $this->pokemonSpecies = $pokemonSpecies;
        return $this;
    }
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
}