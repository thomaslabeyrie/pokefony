<?php

namespace App\Generated\PokeApi\Model;

class PokeathlonStatDetailAffectingNaturesDecreaseItem extends \ArrayObject
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
     * @var PokeathlonStatDetailAffectingNaturesDecreaseItemNature
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
     * @return PokeathlonStatDetailAffectingNaturesDecreaseItemNature
     */
    public function getNature(): PokeathlonStatDetailAffectingNaturesDecreaseItemNature
    {
        return $this->nature;
    }
    /**
     * @param PokeathlonStatDetailAffectingNaturesDecreaseItemNature $nature
     *
     * @return self
     */
    public function setNature(PokeathlonStatDetailAffectingNaturesDecreaseItemNature $nature): self
    {
        $this->initialized['nature'] = true;
        $this->nature = $nature;
        return $this;
    }
}