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

    public function getArea(): PokemonSpeciesDetailPalParkEncountersItemArea
    {
        return $this->area;
    }

    public function setArea(PokemonSpeciesDetailPalParkEncountersItemArea $area): self
    {
        $this->initialized['area'] = true;
        $this->area = $area;

        return $this;
    }

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
