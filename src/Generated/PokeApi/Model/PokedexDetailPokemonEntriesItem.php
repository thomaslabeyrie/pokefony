<?php

namespace App\Generated\PokeApi\Model;

class PokedexDetailPokemonEntriesItem extends \ArrayObject
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
    protected $entryNumber;
    /**
     * @var PokedexDetailPokemonEntriesItemPokemonSpecies
     */
    protected $pokemonSpecies;

    public function getEntryNumber(): int
    {
        return $this->entryNumber;
    }

    public function setEntryNumber(int $entryNumber): self
    {
        $this->initialized['entryNumber'] = true;
        $this->entryNumber = $entryNumber;

        return $this;
    }

    public function getPokemonSpecies(): PokedexDetailPokemonEntriesItemPokemonSpecies
    {
        return $this->pokemonSpecies;
    }

    public function setPokemonSpecies(PokedexDetailPokemonEntriesItemPokemonSpecies $pokemonSpecies): self
    {
        $this->initialized['pokemonSpecies'] = true;
        $this->pokemonSpecies = $pokemonSpecies;

        return $this;
    }
}
