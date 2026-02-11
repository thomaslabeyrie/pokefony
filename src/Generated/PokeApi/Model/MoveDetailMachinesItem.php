<?php

namespace App\Generated\PokeApi\Model;

class MoveDetailMachinesItem extends \ArrayObject
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
     * @var MoveDetailMachinesItemMachine
     */
    protected $machine;
    /**
     * @var MoveDetailMachinesItemVersionGroup
     */
    protected $versionGroup;
    /**
     * @return MoveDetailMachinesItemMachine
     */
    public function getMachine(): MoveDetailMachinesItemMachine
    {
        return $this->machine;
    }
    /**
     * @param MoveDetailMachinesItemMachine $machine
     *
     * @return self
     */
    public function setMachine(MoveDetailMachinesItemMachine $machine): self
    {
        $this->initialized['machine'] = true;
        $this->machine = $machine;
        return $this;
    }
    /**
     * @return MoveDetailMachinesItemVersionGroup
     */
    public function getVersionGroup(): MoveDetailMachinesItemVersionGroup
    {
        return $this->versionGroup;
    }
    /**
     * @param MoveDetailMachinesItemVersionGroup $versionGroup
     *
     * @return self
     */
    public function setVersionGroup(MoveDetailMachinesItemVersionGroup $versionGroup): self
    {
        $this->initialized['versionGroup'] = true;
        $this->versionGroup = $versionGroup;
        return $this;
    }
}