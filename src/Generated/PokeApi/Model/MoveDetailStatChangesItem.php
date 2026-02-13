<?php

namespace App\Generated\PokeApi\Model;

class MoveDetailStatChangesItem extends \ArrayObject
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
     * @var MoveDetailStatChangesItemStat
     */
    protected $stat;

    public function getChange(): int
    {
        return $this->change;
    }

    public function setChange(int $change): self
    {
        $this->initialized['change'] = true;
        $this->change = $change;

        return $this;
    }

    public function getStat(): MoveDetailStatChangesItemStat
    {
        return $this->stat;
    }

    public function setStat(MoveDetailStatChangesItemStat $stat): self
    {
        $this->initialized['stat'] = true;
        $this->stat = $stat;

        return $this;
    }
}
