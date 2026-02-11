<?php

namespace App\Generated\PokeApi\Model;

class PokeathlonStatDetailAffectingNaturesIncreaseItem extends \ArrayObject
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
    protected $maxChange;
    /**
     * @var PokeathlonStatDetailAffectingNaturesIncreaseItemNature
     */
    protected $nature;
    /**
     * @return int
     */
    public function getMaxChange(): int
    {
        return $this->maxChange;
    }
    /**
     * @param int $maxChange
     *
     * @return self
     */
    public function setMaxChange(int $maxChange): self
    {
        $this->initialized['maxChange'] = true;
        $this->maxChange = $maxChange;
        return $this;
    }
    /**
     * @return PokeathlonStatDetailAffectingNaturesIncreaseItemNature
     */
    public function getNature(): PokeathlonStatDetailAffectingNaturesIncreaseItemNature
    {
        return $this->nature;
    }
    /**
     * @param PokeathlonStatDetailAffectingNaturesIncreaseItemNature $nature
     *
     * @return self
     */
    public function setNature(PokeathlonStatDetailAffectingNaturesIncreaseItemNature $nature): self
    {
        $this->initialized['nature'] = true;
        $this->nature = $nature;
        return $this;
    }
}