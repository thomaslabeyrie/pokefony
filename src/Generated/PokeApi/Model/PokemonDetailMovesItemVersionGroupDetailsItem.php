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

    public function getLevelLearnedAt(): int
    {
        return $this->levelLearnedAt;
    }

    public function setLevelLearnedAt(int $levelLearnedAt): self
    {
        $this->initialized['levelLearnedAt'] = true;
        $this->levelLearnedAt = $levelLearnedAt;

        return $this;
    }

    public function getMoveLearnMethod(): PokemonDetailMovesItemVersionGroupDetailsItemMoveLearnMethod
    {
        return $this->moveLearnMethod;
    }

    public function setMoveLearnMethod(PokemonDetailMovesItemVersionGroupDetailsItemMoveLearnMethod $moveLearnMethod): self
    {
        $this->initialized['moveLearnMethod'] = true;
        $this->moveLearnMethod = $moveLearnMethod;

        return $this;
    }

    public function getVersionGroup(): PokemonDetailMovesItemVersionGroupDetailsItemVersionGroup
    {
        return $this->versionGroup;
    }

    public function setVersionGroup(PokemonDetailMovesItemVersionGroupDetailsItemVersionGroup $versionGroup): self
    {
        $this->initialized['versionGroup'] = true;
        $this->versionGroup = $versionGroup;

        return $this;
    }
}
