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
    /**
     * @return int
     */
    public function getEntryNumber(): int
    {
        return $this->entryNumber;
    }
    /**
     * @param int $entryNumber
     *
     * @return self
     */
    public function setEntryNumber(int $entryNumber): self
    {
        $this->initialized['entryNumber'] = true;
        $this->entryNumber = $entryNumber;
        return $this;
    }
    /**
     * @return PokedexDetailPokemonEntriesItemPokemonSpecies
     */
    public function getPokemonSpecies(): PokedexDetailPokemonEntriesItemPokemonSpecies
    {
        return $this->pokemonSpecies;
    }
    /**
     * @param PokedexDetailPokemonEntriesItemPokemonSpecies $pokemonSpecies
     *
     * @return self
     */
    public function setPokemonSpecies(PokedexDetailPokemonEntriesItemPokemonSpecies $pokemonSpecies): self
    {
        $this->initialized['pokemonSpecies'] = true;
        $this->pokemonSpecies = $pokemonSpecies;
        return $this;
    }
}