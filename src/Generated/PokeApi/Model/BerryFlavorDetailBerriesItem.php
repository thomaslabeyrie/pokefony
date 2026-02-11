<?php

namespace App\Generated\PokeApi\Model;

class BerryFlavorDetailBerriesItem extends \ArrayObject
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
     * @var BerryFlavorDetailBerriesItemBerry
     */
    protected $berry;
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
     * @return BerryFlavorDetailBerriesItemBerry
     */
    public function getBerry(): BerryFlavorDetailBerriesItemBerry
    {
        return $this->berry;
    }
    /**
     * @param BerryFlavorDetailBerriesItemBerry $berry
     *
     * @return self
     */
    public function setBerry(BerryFlavorDetailBerriesItemBerry $berry): self
    {
        $this->initialized['berry'] = true;
        $this->berry = $berry;
        return $this;
    }
}