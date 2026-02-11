<?php

namespace App\Generated\PokeApi\Model;

class LocationAreaDetailEncounterMethodRatesItemVersionDetailsItem extends \ArrayObject
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
     * @var LocationAreaDetailEncounterMethodRatesItemVersionDetailsItemVersion
     */
    protected $version;
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
     * @return LocationAreaDetailEncounterMethodRatesItemVersionDetailsItemVersion
     */
    public function getVersion(): LocationAreaDetailEncounterMethodRatesItemVersionDetailsItemVersion
    {
        return $this->version;
    }
    /**
     * @param LocationAreaDetailEncounterMethodRatesItemVersionDetailsItemVersion $version
     *
     * @return self
     */
    public function setVersion(LocationAreaDetailEncounterMethodRatesItemVersionDetailsItemVersion $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}