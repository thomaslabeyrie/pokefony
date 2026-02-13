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

    public function getPotency(): int
    {
        return $this->potency;
    }

    public function setPotency(int $potency): self
    {
        $this->initialized['potency'] = true;
        $this->potency = $potency;

        return $this;
    }

    public function getBerry(): BerryFlavorDetailBerriesItemBerry
    {
        return $this->berry;
    }

    public function setBerry(BerryFlavorDetailBerriesItemBerry $berry): self
    {
        $this->initialized['berry'] = true;
        $this->berry = $berry;

        return $this;
    }
}
