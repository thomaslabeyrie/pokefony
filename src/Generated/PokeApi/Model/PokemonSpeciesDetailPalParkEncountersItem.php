<?php

namespace App\Generated\PokeApi\Model;

class PokemonSpeciesDetailPalParkEncountersItem extends \ArrayObject
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
     * @var PokemonSpeciesDetailPalParkEncountersItemArea
     */
    protected $area;
    /**
     * @var int
     */
    protected $baseScore;
    /**
     * @var int
     */
    protected $rate;
    /**
     * @return PokemonSpeciesDetailPalParkEncountersItemArea
     */
    public function getArea(): PokemonSpeciesDetailPalParkEncountersItemArea
    {
        return $this->area;
    }
    /**
     * @param PokemonSpeciesDetailPalParkEncountersItemArea $area
     *
     * @return self
     */
    public function setArea(PokemonSpeciesDetailPalParkEncountersItemArea $area): self
    {
        $this->initialized['area'] = true;
        $this->area = $area;
        return $this;
    }
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