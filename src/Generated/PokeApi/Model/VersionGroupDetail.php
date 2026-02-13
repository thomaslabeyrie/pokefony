<?php

namespace App\Generated\PokeApi\Model;

class VersionGroupDetail extends \ArrayObject
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
     * @var int|null
     */
    protected $order;
    /**
     * @var GenerationSummary
     */
    protected $generation;
    /**
     * @var list<VersionGroupDetailMoveLearnMethodsItem>
     */
    protected $moveLearnMethods;
    /**
     * @var list<VersionGroupDetailPokedexesItem>
     */
    protected $pokedexes;
    /**
     * @var list<VersionGroupDetailRegionsItem>
     */
    protected $regions;
    /**
     * @var list<VersionSummary>
     */
    protected $versions;

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

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(?int $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    public function getGeneration(): GenerationSummary
    {
        return $this->generation;
    }

    public function setGeneration(GenerationSummary $generation): self
    {
        $this->initialized['generation'] = true;
        $this->generation = $generation;

        return $this;
    }

    /**
     * @return list<VersionGroupDetailMoveLearnMethodsItem>
     */
    public function getMoveLearnMethods(): array
    {
        return $this->moveLearnMethods;
    }

    /**
     * @param list<VersionGroupDetailMoveLearnMethodsItem> $moveLearnMethods
     */
    public function setMoveLearnMethods(array $moveLearnMethods): self
    {
        $this->initialized['moveLearnMethods'] = true;
        $this->moveLearnMethods = $moveLearnMethods;

        return $this;
    }

    /**
     * @return list<VersionGroupDetailPokedexesItem>
     */
    public function getPokedexes(): array
    {
        return $this->pokedexes;
    }

    /**
     * @param list<VersionGroupDetailPokedexesItem> $pokedexes
     */
    public function setPokedexes(array $pokedexes): self
    {
        $this->initialized['pokedexes'] = true;
        $this->pokedexes = $pokedexes;

        return $this;
    }

    /**
     * @return list<VersionGroupDetailRegionsItem>
     */
    public function getRegions(): array
    {
        return $this->regions;
    }

    /**
     * @param list<VersionGroupDetailRegionsItem> $regions
     */
    public function setRegions(array $regions): self
    {
        $this->initialized['regions'] = true;
        $this->regions = $regions;

        return $this;
    }

    /**
     * @return list<VersionSummary>
     */
    public function getVersions(): array
    {
        return $this->versions;
    }

    /**
     * @param list<VersionSummary> $versions
     */
    public function setVersions(array $versions): self
    {
        $this->initialized['versions'] = true;
        $this->versions = $versions;

        return $this;
    }
}
