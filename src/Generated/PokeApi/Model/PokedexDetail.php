<?php

namespace App\Generated\PokeApi\Model;

class PokedexDetail extends \ArrayObject
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
     * @var bool
     */
    protected $isMainSeries;
    /**
     * @var list<PokedexDescription>
     */
    protected $descriptions;
    /**
     * @var list<PokedexName>
     */
    protected $names;
    /**
     * @var list<PokedexDetailPokemonEntriesItem>
     */
    protected $pokemonEntries;
    /**
     * @var RegionSummary
     */
    protected $region;
    /**
     * @var list<PokedexDetailVersionGroupsItem>
     */
    protected $versionGroups;
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
     * @return bool
     */
    public function getIsMainSeries(): bool
    {
        return $this->isMainSeries;
    }
    /**
     * @param bool $isMainSeries
     *
     * @return self
     */
    public function setIsMainSeries(bool $isMainSeries): self
    {
        $this->initialized['isMainSeries'] = true;
        $this->isMainSeries = $isMainSeries;
        return $this;
    }
    /**
     * @return list<PokedexDescription>
     */
    public function getDescriptions(): array
    {
        return $this->descriptions;
    }
    /**
     * @param list<PokedexDescription> $descriptions
     *
     * @return self
     */
    public function setDescriptions(array $descriptions): self
    {
        $this->initialized['descriptions'] = true;
        $this->descriptions = $descriptions;
        return $this;
    }
    /**
     * @return list<PokedexName>
     */
    public function getNames(): array
    {
        return $this->names;
    }
    /**
     * @param list<PokedexName> $names
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
     * @return list<PokedexDetailPokemonEntriesItem>
     */
    public function getPokemonEntries(): array
    {
        return $this->pokemonEntries;
    }
    /**
     * @param list<PokedexDetailPokemonEntriesItem> $pokemonEntries
     *
     * @return self
     */
    public function setPokemonEntries(array $pokemonEntries): self
    {
        $this->initialized['pokemonEntries'] = true;
        $this->pokemonEntries = $pokemonEntries;
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
     * @return list<PokedexDetailVersionGroupsItem>
     */
    public function getVersionGroups(): array
    {
        return $this->versionGroups;
    }
    /**
     * @param list<PokedexDetailVersionGroupsItem> $versionGroups
     *
     * @return self
     */
    public function setVersionGroups(array $versionGroups): self
    {
        $this->initialized['versionGroups'] = true;
        $this->versionGroups = $versionGroups;
        return $this;
    }
}