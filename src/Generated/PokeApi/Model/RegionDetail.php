<?php

namespace App\Generated\PokeApi\Model;

class RegionDetail extends \ArrayObject
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
     * @var list<LocationSummary>
     */
    protected $locations;
    /**
     * @var RegionDetailMainGeneration
     */
    protected $mainGeneration;
    /**
     * @var list<RegionName>
     */
    protected $names;
    /**
     * @var list<PokedexSummary>
     */
    protected $pokedexes;
    /**
     * @var list<RegionDetailVersionGroupsItem>
     */
    protected $versionGroups;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * @return list<LocationSummary>
     */
    public function getLocations(): array
    {
        return $this->locations;
    }

    /**
     * @param list<LocationSummary> $locations
     */
    public function setLocations(array $locations): self
    {
        $this->initialized['locations'] = true;
        $this->locations = $locations;

        return $this;
    }

    public function getMainGeneration(): RegionDetailMainGeneration
    {
        return $this->mainGeneration;
    }

    public function setMainGeneration(RegionDetailMainGeneration $mainGeneration): self
    {
        $this->initialized['mainGeneration'] = true;
        $this->mainGeneration = $mainGeneration;

        return $this;
    }

    /**
     * @return list<RegionName>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param list<RegionName> $names
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;

        return $this;
    }

    /**
     * @return list<PokedexSummary>
     */
    public function getPokedexes(): array
    {
        return $this->pokedexes;
    }

    /**
     * @param list<PokedexSummary> $pokedexes
     */
    public function setPokedexes(array $pokedexes): self
    {
        $this->initialized['pokedexes'] = true;
        $this->pokedexes = $pokedexes;

        return $this;
    }

    /**
     * @return list<RegionDetailVersionGroupsItem>
     */
    public function getVersionGroups(): array
    {
        return $this->versionGroups;
    }

    /**
     * @param list<RegionDetailVersionGroupsItem> $versionGroups
     */
    public function setVersionGroups(array $versionGroups): self
    {
        $this->initialized['versionGroups'] = true;
        $this->versionGroups = $versionGroups;

        return $this;
    }
}
