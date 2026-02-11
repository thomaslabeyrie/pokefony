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
    /**
     * @return string
     */
    public function getMachine(): string
    {
        return $this->machine;
    }
    /**
     * @param string $machine
     *
     * @return self
     */
    public function setMachine(string $machine): self
    {
        $this->initialized['machine'] = true;
        $this->machine = $machine;
        return $this;
    }
    /**
     * @return ItemDetailMachinesItemVersionGroup
     */
    public function getVersionGroup(): ItemDetailMachinesItemVersionGroup
    {
        return $this->versionGroup;
    }
    /**
     * @param ItemDetailMachinesItemVersionGroup $versionGroup
     *
     * @return self
     */
    public function setVersionGroup(ItemDetailMachinesItemVersionGroup $versionGroup): self
    {
        $this->initialized['versionGroup'] = true;
        $this->versionGroup = $versionGroup;
        return $this;
    }
}