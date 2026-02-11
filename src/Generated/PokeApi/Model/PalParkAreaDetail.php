<?php

namespace App\Generated\PokeApi\Model;

class PalParkAreaDetail extends \ArrayObject
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
     * @var list<PalParkAreaName>
     */
    protected $names;
    /**
     * @var list<PalParkAreaDetailPokemonEncountersItem>
     */
    protected $pokemonEncounters;
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
     * @return list<PalParkAreaName>
     */
    public function getNames(): array
    {
        return $this->names;
    }
    /**
     * @param list<PalParkAreaName> $names
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
     * @return list<PalParkAreaDetailPokemonEncountersItem>
     */
    public function getPokemonEncounters(): array
    {
        return $this->pokemonEncounters;
    }
    /**
     * @param list<PalParkAreaDetailPokemonEncountersItem> $pokemonEncounters
     *
     * @return self
     */
    public function setPokemonEncounters(array $pokemonEncounters): self
    {
        $this->initialized['pokemonEncounters'] = true;
        $this->pokemonEncounters = $pokemonEncounters;
        return $this;
    }
}