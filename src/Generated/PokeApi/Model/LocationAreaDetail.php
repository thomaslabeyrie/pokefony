<?php

namespace App\Generated\PokeApi\Model;

class LocationAreaDetail extends \ArrayObject
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
     * @var int
     */
    protected $gameIndex;
    /**
     * @var list<LocationAreaDetailEncounterMethodRatesItem>
     */
    protected $encounterMethodRates;
    /**
     * @var LocationSummary
     */
    protected $location;
    /**
     * @var list<LocationAreaName>
     */
    protected $names;
    /**
     * @var list<LocationAreaDetailPokemonEncountersItem>
     */
    protected $pokemonEncounters;

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

    public function getGameIndex(): int
    {
        return $this->gameIndex;
    }

    public function setGameIndex(int $gameIndex): self
    {
        $this->initialized['gameIndex'] = true;
        $this->gameIndex = $gameIndex;

        return $this;
    }

    /**
     * @return list<LocationAreaDetailEncounterMethodRatesItem>
     */
    public function getEncounterMethodRates(): array
    {
        return $this->encounterMethodRates;
    }

    /**
     * @param list<LocationAreaDetailEncounterMethodRatesItem> $encounterMethodRates
     */
    public function setEncounterMethodRates(array $encounterMethodRates): self
    {
        $this->initialized['encounterMethodRates'] = true;
        $this->encounterMethodRates = $encounterMethodRates;

        return $this;
    }

    public function getLocation(): LocationSummary
    {
        return $this->location;
    }

    public function setLocation(LocationSummary $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;

        return $this;
    }

    /**
     * @return list<LocationAreaName>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param list<LocationAreaName> $names
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;

        return $this;
    }

    /**
     * @return list<LocationAreaDetailPokemonEncountersItem>
     */
    public function getPokemonEncounters(): array
    {
        return $this->pokemonEncounters;
    }

    /**
     * @param list<LocationAreaDetailPokemonEncountersItem> $pokemonEncounters
     */
    public function setPokemonEncounters(array $pokemonEncounters): self
    {
        $this->initialized['pokemonEncounters'] = true;
        $this->pokemonEncounters = $pokemonEncounters;

        return $this;
    }
}
