<?php

namespace App\Generated\PokeApi\Model;

class LocationAreaDetailEncounterMethodRatesItem extends \ArrayObject
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
     * @var LocationAreaDetailEncounterMethodRatesItemEncounterMethod
     */
    protected $encounterMethod;
    /**
     * @var list<LocationAreaDetailEncounterMethodRatesItemVersionDetailsItem>
     */
    protected $versionDetails;

    public function getEncounterMethod(): LocationAreaDetailEncounterMethodRatesItemEncounterMethod
    {
        return $this->encounterMethod;
    }

    public function setEncounterMethod(LocationAreaDetailEncounterMethodRatesItemEncounterMethod $encounterMethod): self
    {
        $this->initialized['encounterMethod'] = true;
        $this->encounterMethod = $encounterMethod;

        return $this;
    }

    /**
     * @return list<LocationAreaDetailEncounterMethodRatesItemVersionDetailsItem>
     */
    public function getVersionDetails(): array
    {
        return $this->versionDetails;
    }

    /**
     * @param list<LocationAreaDetailEncounterMethodRatesItemVersionDetailsItem> $versionDetails
     */
    public function setVersionDetails(array $versionDetails): self
    {
        $this->initialized['versionDetails'] = true;
        $this->versionDetails = $versionDetails;

        return $this;
    }
}
