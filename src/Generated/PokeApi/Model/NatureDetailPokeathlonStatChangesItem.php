<?php

namespace App\Generated\PokeApi\Model;

class NatureDetailPokeathlonStatChangesItem extends \ArrayObject
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
     * @var NatureDetailPokeathlonStatChangesItemPokeathlonStat
     */
    protected $pokeathlonStat;
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
     * @return NatureDetailPokeathlonStatChangesItemPokeathlonStat
     */
    public function getPokeathlonStat(): NatureDetailPokeathlonStatChangesItemPokeathlonStat
    {
        return $this->pokeathlonStat;
    }
    /**
     * @param NatureDetailPokeathlonStatChangesItemPokeathlonStat $pokeathlonStat
     *
     * @return self
     */
    public function setPokeathlonStat(NatureDetailPokeathlonStatChangesItemPokeathlonStat $pokeathlonStat): self
    {
        $this->initialized['pokeathlonStat'] = true;
        $this->pokeathlonStat = $pokeathlonStat;
        return $this;
    }
}