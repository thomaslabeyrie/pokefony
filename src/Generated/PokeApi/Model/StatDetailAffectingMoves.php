<?php

namespace App\Generated\PokeApi\Model;

class StatDetailAffectingMoves extends \ArrayObject
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
     * @var list<StatDetailAffectingMovesIncreaseItem>
     */
    protected $increase;
    /**
     * @var list<StatDetailAffectingMovesDecreaseItem>
     */
    protected $decrease;
    /**
     * @return list<StatDetailAffectingMovesIncreaseItem>
     */
    public function getIncrease(): array
    {
        return $this->increase;
    }
    /**
     * @param list<StatDetailAffectingMovesIncreaseItem> $increase
     *
     * @return self
     */
    public function setIncrease(array $increase): self
    {
        $this->initialized['increase'] = true;
        $this->increase = $increase;
        return $this;
    }
    /**
     * @return list<StatDetailAffectingMovesDecreaseItem>
     */
    public function getDecrease(): array
    {
        return $this->decrease;
    }
    /**
     * @param list<StatDetailAffectingMovesDecreaseItem> $decrease
     *
     * @return self
     */
    public function setDecrease(array $decrease): self
    {
        $this->initialized['decrease'] = true;
        $this->decrease = $decrease;
        return $this;
    }
}