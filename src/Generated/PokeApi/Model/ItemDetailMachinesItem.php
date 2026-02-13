<?php

namespace App\Generated\PokeApi\Model;

class ItemDetailMachinesItem extends \ArrayObject
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
     * @var string
     */
    protected $machine;
    /**
     * @var ItemDetailMachinesItemVersionGroup
     */
    protected $versionGroup;

    public function getMachine(): string
    {
        return $this->machine;
    }

    public function setMachine(string $machine): self
    {
        $this->initialized['machine'] = true;
        $this->machine = $machine;

        return $this;
    }

    public function getVersionGroup(): ItemDetailMachinesItemVersionGroup
    {
        return $this->versionGroup;
    }

    public function setVersionGroup(ItemDetailMachinesItemVersionGroup $versionGroup): self
    {
        $this->initialized['versionGroup'] = true;
        $this->versionGroup = $versionGroup;

        return $this;
    }
}
