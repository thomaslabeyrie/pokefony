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

    public function getBaseScore(): int
    {
        return $this->baseScore;
    }

    public function setBaseScore(int $baseScore): self
    {
        $this->initialized['baseScore'] = true;
        $this->baseScore = $baseScore;

        return $this;
    }

    public function getPokemonSpecies(): PalParkAreaDetailPokemonEncountersItemPokemonSpecies
    {
        return $this->pokemonSpecies;
    }

    public function setPokemonSpecies(PalParkAreaDetailPokemonEncountersItemPokemonSpecies $pokemonSpecies): self
    {
        $this->initialized['pokemonSpecies'] = true;
        $this->pokemonSpecies = $pokemonSpecies;

        return $this;
    }

    public function getRate(): int
    {
        return $this->rate;
    }

    public function setRate(int $rate): self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;

        return $this;
    }
}
