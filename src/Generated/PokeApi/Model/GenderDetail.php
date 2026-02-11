<?php

namespace App\Generated\PokeApi\Model;

class GenderDetail extends \ArrayObject
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
     * @var list<GenderDetailPokemonSpeciesDetailsItem>
     */
    protected $pokemonSpeciesDetails;
    /**
     * @var list<GenderDetailRequiredForEvolutionItem>
     */
    protected $requiredForEvolution;
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
     * @return list<GenderDetailPokemonSpeciesDetailsItem>
     */
    public function getPokemonSpeciesDetails(): array
    {
        return $this->pokemonSpeciesDetails;
    }
    /**
     * @param list<GenderDetailPokemonSpeciesDetailsItem> $pokemonSpeciesDetails
     *
     * @return self
     */
    public function setPokemonSpeciesDetails(array $pokemonSpeciesDetails): self
    {
        $this->initialized['pokemonSpeciesDetails'] = true;
        $this->pokemonSpeciesDetails = $pokemonSpeciesDetails;
        return $this;
    }
    /**
     * @return list<GenderDetailRequiredForEvolutionItem>
     */
    public function getRequiredForEvolution(): array
    {
        return $this->requiredForEvolution;
    }
    /**
     * @param list<GenderDetailRequiredForEvolutionItem> $requiredForEvolution
     *
     * @return self
     */
    public function setRequiredForEvolution(array $requiredForEvolution): self
    {
        $this->initialized['requiredForEvolution'] = true;
        $this->requiredForEvolution = $requiredForEvolution;
        return $this;
    }
}