<?php

namespace App\Generated\PokeApi\Model;

class PokemonDexEntry extends \ArrayObject
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
     * @var PokedexSummary
     */
    protected $pokedex;
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
     * @return PokedexSummary
     */
    public function getPokedex(): PokedexSummary
    {
        return $this->pokedex;
    }
    /**
     * @param PokedexSummary $pokedex
     *
     * @return self
     */
    public function setPokedex(PokedexSummary $pokedex): self
    {
        $this->initialized['pokedex'] = true;
        $this->pokedex = $pokedex;
        return $this;
    }
}