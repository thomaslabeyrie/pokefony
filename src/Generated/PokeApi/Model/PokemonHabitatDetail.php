<?php

namespace App\Generated\PokeApi\Model;

class PokemonHabitatDetail extends \ArrayObject
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
     * @var list<PokemonHabitatName>
     */
    protected $names;
    /**
     * @var list<PokemonSpeciesSummary>
     */
    protected $pokemonSpecies;

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
     * @return list<PokemonHabitatName>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param list<PokemonHabitatName> $names
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
     */
    public function setPokemonSpecies(array $pokemonSpecies): self
    {
        $this->initialized['pokemonSpecies'] = true;
        $this->pokemonSpecies = $pokemonSpecies;

        return $this;
    }
}
