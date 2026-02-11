<?php

namespace App\Generated\PokeApi\Model;

class StatDetailAffectingMovesIncreaseItem extends \ArrayObject
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
    protected $change;
    /**
     * @var StatDetailAffectingMovesIncreaseItemMove
     */
    protected $move;
    /**
     * @return int
     */
    public function getChange(): int
    {
        return $this->change;
    }
    /**
     * @param int $change
     *
     * @return self
     */
    public function setChange(int $change): self
    {
        $this->initialized['change'] = true;
        $this->change = $change;
        return $this;
    }
    /**
     * @return StatDetailAffectingMovesIncreaseItemMove
     */
    public function getMove(): StatDetailAffectingMovesIncreaseItemMove
    {
        return $this->move;
    }
    /**
     * @param StatDetailAffectingMovesIncreaseItemMove $move
     *
     * @return self
     */
    public function setMove(StatDetailAffectingMovesIncreaseItemMove $move): self
    {
        $this->initialized['move'] = true;
        $this->move = $move;
        return $this;
    }
}