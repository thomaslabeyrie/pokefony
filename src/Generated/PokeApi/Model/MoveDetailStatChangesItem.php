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
    /**
     * @return int
     */
    public function getChange(): int
    {
        return $this->change;
    }
    /**
     * @param int $change
     *
     * @return self
     */
    public function setChange(int $change): self
    {
        $this->initialized['change'] = true;
        $this->change = $change;
        return $this;
    }
    /**
     * @return MoveDetailStatChangesItemStat
     */
    public function getStat(): MoveDetailStatChangesItemStat
    {
        return $this->stat;
    }
    /**
     * @param MoveDetailStatChangesItemStat $stat
     *
     * @return self
     */
    public function setStat(MoveDetailStatChangesItemStat $stat): self
    {
        $this->initialized['stat'] = true;
        $this->stat = $stat;
        return $this;
    }
}