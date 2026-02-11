<?php

namespace App\Generated\PokeApi\Model;

class StatDetailAffectingNatures extends \ArrayObject
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
     * @var list<StatDetailAffectingNaturesIncreaseItem>
     */
    protected $increase;
    /**
     * @var list<StatDetailAffectingNaturesDecreaseItem>
     */
    protected $decrease;
    /**
     * @return list<StatDetailAffectingNaturesIncreaseItem>
     */
    public function getIncrease(): array
    {
        return $this->increase;
    }
    /**
     * @param list<StatDetailAffectingNaturesIncreaseItem> $increase
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
     * @return list<StatDetailAffectingNaturesDecreaseItem>
     */
    public function getDecrease(): array
    {
        return $this->decrease;
    }
    /**
     * @param list<StatDetailAffectingNaturesDecreaseItem> $decrease
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