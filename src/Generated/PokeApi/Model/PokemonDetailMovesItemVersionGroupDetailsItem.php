<?php

namespace App\Generated\PokeApi\Model;

class PokemonDetailMovesItemVersionGroupDetailsItem extends \ArrayObject
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
    protected $levelLearnedAt;
    /**
     * @var PokemonDetailMovesItemVersionGroupDetailsItemMoveLearnMethod
     */
    protected $moveLearnMethod;
    /**
     * @var PokemonDetailMovesItemVersionGroupDetailsItemVersionGroup
     */
    protected $versionGroup;
    /**
     * @return int
     */
    public function getLevelLearnedAt(): int
    {
        return $this->levelLearnedAt;
    }
    /**
     * @param int $levelLearnedAt
     *
     * @return self
     */
    public function setLevelLearnedAt(int $levelLearnedAt): self
    {
        $this->initialized['levelLearnedAt'] = true;
        $this->levelLearnedAt = $levelLearnedAt;
        return $this;
    }
    /**
     * @return PokemonDetailMovesItemVersionGroupDetailsItemMoveLearnMethod
     */
    public function getMoveLearnMethod(): PokemonDetailMovesItemVersionGroupDetailsItemMoveLearnMethod
    {
        return $this->moveLearnMethod;
    }
    /**
     * @param PokemonDetailMovesItemVersionGroupDetailsItemMoveLearnMethod $moveLearnMethod
     *
     * @return self
     */
    public function setMoveLearnMethod(PokemonDetailMovesItemVersionGroupDetailsItemMoveLearnMethod $moveLearnMethod): self
    {
        $this->initialized['moveLearnMethod'] = true;
        $this->moveLearnMethod = $moveLearnMethod;
        return $this;
    }
    /**
     * @return PokemonDetailMovesItemVersionGroupDetailsItemVersionGroup
     */
    public function getVersionGroup(): PokemonDetailMovesItemVersionGroupDetailsItemVersionGroup
    {
        return $this->versionGroup;
    }
    /**
     * @param PokemonDetailMovesItemVersionGroupDetailsItemVersionGroup $versionGroup
     *
     * @return self
     */
    public function setVersionGroup(PokemonDetailMovesItemVersionGroupDetailsItemVersionGroup $versionGroup): self
    {
        $this->initialized['versionGroup'] = true;
        $this->versionGroup = $versionGroup;
        return $this;
    }
}