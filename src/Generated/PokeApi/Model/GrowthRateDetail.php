<?php

namespace App\Generated\PokeApi\Model;

class GrowthRateDetail extends \ArrayObject
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
     * @var string
     */
    protected $formula;
    /**
     * @var list<GrowthRateDescription>
     */
    protected $descriptions;
    /**
     * @var list<Experience>
     */
    protected $levels;
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

    public function getFormula(): string
    {
        return $this->formula;
    }

    public function setFormula(string $formula): self
    {
        $this->initialized['formula'] = true;
        $this->formula = $formula;

        return $this;
    }

    /**
     * @return list<GrowthRateDescription>
     */
    public function getDescriptions(): array
    {
        return $this->descriptions;
    }

    /**
     * @param list<GrowthRateDescription> $descriptions
     */
    public function setDescriptions(array $descriptions): self
    {
        $this->initialized['descriptions'] = true;
        $this->descriptions = $descriptions;

        return $this;
    }

    /**
     * @return list<Experience>
     */
    public function getLevels(): array
    {
        return $this->levels;
    }

    /**
     * @param list<Experience> $levels
     */
    public function setLevels(array $levels): self
    {
        $this->initialized['levels'] = true;
        $this->levels = $levels;

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
