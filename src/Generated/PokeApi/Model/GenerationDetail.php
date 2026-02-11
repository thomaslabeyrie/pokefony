<?php

namespace App\Generated\PokeApi\Model;

class GenerationDetail extends \ArrayObject
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
     * @var list<AbilitySummary>
     */
    protected $abilities;
    /**
     * @var RegionSummary
     */
    protected $mainRegion;
    /**
     * @var list<MoveSummary>
     */
    protected $moves;
    /**
     * @var list<GenerationName>
     */
    protected $names;
    /**
     * @var list<PokemonSpeciesSummary>
     */
    protected $pokemonSpecies;
    /**
     * @var list<TypeSummary>
     */
    protected $types;
    /**
     * @var list<VersionGroupSummary>
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
     * @return list<AbilitySummary>
     */
    public function getAbilities(): array
    {
        return $this->abilities;
    }
    /**
     * @param list<AbilitySummary> $abilities
     *
     * @return self
     */
    public function setAbilities(array $abilities): self
    {
        $this->initialized['abilities'] = true;
        $this->abilities = $abilities;
        return $this;
    }
    /**
     * @return RegionSummary
     */
    public function getMainRegion(): RegionSummary
    {
        return $this->mainRegion;
    }
    /**
     * @param RegionSummary $mainRegion
     *
     * @return self
     */
    public function setMainRegion(RegionSummary $mainRegion): self
    {
        $this->initialized['mainRegion'] = true;
        $this->mainRegion = $mainRegion;
        return $this;
    }
    /**
     * @return list<MoveSummary>
     */
    public function getMoves(): array
    {
        return $this->moves;
    }
    /**
     * @param list<MoveSummary> $moves
     *
     * @return self
     */
    public function setMoves(array $moves): self
    {
        $this->initialized['moves'] = true;
        $this->moves = $moves;
        return $this;
    }
    /**
     * @return list<GenerationName>
     */
    public function getNames(): array
    {
        return $this->names;
    }
    /**
     * @param list<GenerationName> $names
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
     * @return list<PokemonSpeciesSummary>
     */
    public function getPokemonSpecies(): array
    {
        return $this->pokemonSpecies;
    }
    /**
     * @param list<PokemonSpeciesSummary> $pokemonSpecies
     *
     * @return self
     */
    public function setPokemonSpecies(array $pokemonSpecies): self
    {
        $this->initialized['pokemonSpecies'] = true;
        $this->pokemonSpecies = $pokemonSpecies;
        return $this;
    }
    /**
     * @return list<TypeSummary>
     */
    public function getTypes(): array
    {
        return $this->types;
    }
    /**
     * @param list<TypeSummary> $types
     *
     * @return self
     */
    public function setTypes(array $types): self
    {
        $this->initialized['types'] = true;
        $this->types = $types;
        return $this;
    }
    /**
     * @return list<VersionGroupSummary>
     */
    public function getVersionGroups(): array
    {
        return $this->versionGroups;
    }
    /**
     * @param list<VersionGroupSummary> $versionGroups
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