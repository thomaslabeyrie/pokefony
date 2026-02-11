<?php

namespace App\Generated\PokeApi\Model;

class PokeathlonStatDetailAffectingNatures extends \ArrayObject
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
     * @var list<PokeathlonStatDetailAffectingNaturesDecreaseItem>
     */
    protected $decrease;
    /**
     * @var list<PokeathlonStatDetailAffectingNaturesIncreaseItem>
     */
    protected $increase;
    /**
     * @return list<PokeathlonStatDetailAffectingNaturesDecreaseItem>
     */
    public function getDecrease(): array
    {
        return $this->decrease;
    }
    /**
     * @param list<PokeathlonStatDetailAffectingNaturesDecreaseItem> $decrease
     *
     * @return self
     */
    public function setDecrease(array $decrease): self
    {
        $this->initialized['decrease'] = true;
        $this->decrease = $decrease;
        return $this;
    }
    /**
     * @return list<PokeathlonStatDetailAffectingNaturesIncreaseItem>
     */
    public function getIncrease(): array
    {
        return $this->increase;
    }
    /**
     * @param list<PokeathlonStatDetailAffectingNaturesIncreaseItem> $increase
     *
     * @return self
     */
    public function setIncrease(array $increase): self
    {
        $this->initialized['increase'] = true;
        $this->increase = $increase;
        return $this;
    }
}