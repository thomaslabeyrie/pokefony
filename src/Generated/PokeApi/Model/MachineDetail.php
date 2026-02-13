<?php

namespace App\Generated\PokeApi\Model;

class MachineDetail extends \ArrayObject
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
    protected $id;
    /**
     * @var ItemSummary
     */
    protected $item;
    /**
     * @var VersionGroupSummary
     */
    protected $versionGroup;
    /**
     * @var MoveSummary
     */
    protected $move;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getItem(): ItemSummary
    {
        return $this->item;
    }

    public function setItem(ItemSummary $item): self
    {
        $this->initialized['item'] = true;
        $this->item = $item;

        return $this;
    }

    public function getVersionGroup(): VersionGroupSummary
    {
        return $this->versionGroup;
    }

    public function setVersionGroup(VersionGroupSummary $versionGroup): self
    {
        $this->initialized['versionGroup'] = true;
        $this->versionGroup = $versionGroup;

        return $this;
    }

    public function getMove(): MoveSummary
    {
        return $this->move;
    }

    public function setMove(MoveSummary $move): self
    {
        $this->initialized['move'] = true;
        $this->move = $move;

        return $this;
    }
}
