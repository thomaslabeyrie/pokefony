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

    public function getMaxChange(): int
    {
        return $this->maxChange;
    }

    public function setMaxChange(int $maxChange): self
    {
        $this->initialized['maxChange'] = true;
        $this->maxChange = $maxChange;

        return $this;
    }

    public function getNature(): PokeathlonStatDetailAffectingNaturesIncreaseItemNature
    {
        return $this->nature;
    }

    public function setNature(PokeathlonStatDetailAffectingNaturesIncreaseItemNature $nature): self
    {
        $this->initialized['nature'] = true;
        $this->nature = $nature;

        return $this;
    }
}
