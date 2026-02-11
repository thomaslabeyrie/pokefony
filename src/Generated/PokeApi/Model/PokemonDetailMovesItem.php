<?php

namespace App\Generated\PokeApi\Model;

class PokemonDetailMovesItem extends \ArrayObject
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
     * @var PokemonDetailMovesItemMove
     */
    protected $move;
    /**
     * @var list<PokemonDetailMovesItemVersionGroupDetailsItem>
     */
    protected $versionGroupDetails;
    /**
     * @return PokemonDetailMovesItemMove
     */
    public function getMove(): PokemonDetailMovesItemMove
    {
        return $this->move;
    }
    /**
     * @param PokemonDetailMovesItemMove $move
     *
     * @return self
     */
    public function setMove(PokemonDetailMovesItemMove $move): self
    {
        $this->initialized['move'] = true;
        $this->move = $move;
        return $this;
    }
    /**
     * @return list<PokemonDetailMovesItemVersionGroupDetailsItem>
     */
    public function getVersionGroupDetails(): array
    {
        return $this->versionGroupDetails;
    }
    /**
     * @param list<PokemonDetailMovesItemVersionGroupDetailsItem> $versionGroupDetails
     *
     * @return self
     */
    public function setVersionGroupDetails(array $versionGroupDetails): self
    {
        $this->initialized['versionGroupDetails'] = true;
        $this->versionGroupDetails = $versionGroupDetails;
        return $this;
    }
}