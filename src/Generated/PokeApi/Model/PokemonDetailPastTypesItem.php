<?php

namespace App\Generated\PokeApi\Model;

class PokemonDetailPastTypesItem extends \ArrayObject
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
     * @var PokemonDetailPastTypesItemGeneration
     */
    protected $generation;
    /**
     * @var list<PokemonDetailPastTypesItemTypesItem>
     */
    protected $types;

    public function getGeneration(): PokemonDetailPastTypesItemGeneration
    {
        return $this->generation;
    }

    public function setGeneration(PokemonDetailPastTypesItemGeneration $generation): self
    {
        $this->initialized['generation'] = true;
        $this->generation = $generation;

        return $this;
    }

    /**
     * @return list<PokemonDetailPastTypesItemTypesItem>
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * @param list<PokemonDetailPastTypesItemTypesItem> $types
     */
    public function setTypes(array $types): self
    {
        $this->initialized['types'] = true;
        $this->types = $types;

        return $this;
    }
}
