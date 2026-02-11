<?php

namespace App\Generated\PokeApi\Model;

class LocationDetail extends \ArrayObject
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
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var RegionSummary
     */
    protected $region;
    /**
     * @var list<LocationName>
     */
    protected $names;
    /**
     * @var list<LocationGameIndex>
     */
    protected $gameIndices;
    /**
     * @var list<LocationAreaSummary>
     */
    protected $areas;
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return RegionSummary
     */
    public function getRegion(): RegionSummary
    {
        return $this->region;
    }
    /**
     * @param RegionSummary $region
     *
     * @return self
     */
    public function setRegion(RegionSummary $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * @return list<LocationName>
     */
    public function getNames(): array
    {
        return $this->names;
    }
    /**
     * @param list<LocationName> $names
     *
     * @return self
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * @return list<LocationGameIndex>
     */
    public function getGameIndices(): array
    {
        return $this->gameIndices;
    }
    /**
     * @param list<LocationGameIndex> $gameIndices
     *
     * @return self
     */
    public function setGameIndices(array $gameIndices): self
    {
        $this->initialized['gameIndices'] = true;
        $this->gameIndices = $gameIndices;
        return $this;
    }
    /**
     * @return list<LocationAreaSummary>
     */
    public function getAreas(): array
    {
        return $this->areas;
    }
    /**
     * @param list<LocationAreaSummary> $areas
     *
     * @return self
     */
    public function setAreas(array $areas): self
    {
        $this->initialized['areas'] = true;
        $this->areas = $areas;
        return $this;
    }
}