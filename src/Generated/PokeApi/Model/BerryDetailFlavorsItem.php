<?php

namespace App\Generated\PokeApi\Model;

class BerryDetailFlavorsItem extends \ArrayObject
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
    protected $potency;
    /**
     * @var BerryDetailFlavorsItemFlavor
     */
    protected $flavor;
    /**
     * @return int
     */
    public function getPotency(): int
    {
        return $this->potency;
    }
    /**
     * @param int $potency
     *
     * @return self
     */
    public function setPotency(int $potency): self
    {
        $this->initialized['potency'] = true;
        $this->potency = $potency;
        return $this;
    }
    /**
     * @return BerryDetailFlavorsItemFlavor
     */
    public function getFlavor(): BerryDetailFlavorsItemFlavor
    {
        return $this->flavor;
    }
    /**
     * @param BerryDetailFlavorsItemFlavor $flavor
     *
     * @return self
     */
    public function setFlavor(BerryDetailFlavorsItemFlavor $flavor): self
    {
        $this->initialized['flavor'] = true;
        $this->flavor = $flavor;
        return $this;
    }
}