<?php

namespace App\Generated\PokeApi\Model;

class EvolutionTriggerDetail extends \ArrayObject
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
     * @var list<EvolutionTriggerName>
     */
    protected $names;
    /**
     * @var list<EvolutionTriggerDetailPokemonSpeciesItem>
     */
    protected $pokemonSpecies;
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
     * @return list<EvolutionTriggerName>
     */
    public function getNames(): array
    {
        return $this->names;
    }
    /**
     * @param list<EvolutionTriggerName> $names
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
     * @return list<EvolutionTriggerDetailPokemonSpeciesItem>
     */
    public function getPokemonSpecies(): array
    {
        return $this->pokemonSpecies;
    }
    /**
     * @param list<EvolutionTriggerDetailPokemonSpeciesItem> $pokemonSpecies
     *
     * @return self
     */
    public function setPokemonSpecies(array $pokemonSpecies): self
    {
        $this->initialized['pokemonSpecies'] = true;
        $this->pokemonSpecies = $pokemonSpecies;
        return $this;
    }
}