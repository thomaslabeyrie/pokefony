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

    public function getMachine(): MoveDetailMachinesItemMachine
    {
        return $this->machine;
    }

    public function setMachine(MoveDetailMachinesItemMachine $machine): self
    {
        $this->initialized['machine'] = true;
        $this->machine = $machine;

        return $this;
    }

    public function getVersionGroup(): MoveDetailMachinesItemVersionGroup
    {
        return $this->versionGroup;
    }

    public function setVersionGroup(MoveDetailMachinesItemVersionGroup $versionGroup): self
    {
        $this->initialized['versionGroup'] = true;
        $this->versionGroup = $versionGroup;

        return $this;
    }
}
