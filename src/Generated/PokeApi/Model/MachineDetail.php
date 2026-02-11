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
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return ItemSummary
     */
    public function getItem(): ItemSummary
    {
        return $this->item;
    }
    /**
     * @param ItemSummary $item
     *
     * @return self
     */
    public function setItem(ItemSummary $item): self
    {
        $this->initialized['item'] = true;
        $this->item = $item;
        return $this;
    }
    /**
     * @return VersionGroupSummary
     */
    public function getVersionGroup(): VersionGroupSummary
    {
        return $this->versionGroup;
    }
    /**
     * @param VersionGroupSummary $versionGroup
     *
     * @return self
     */
    public function setVersionGroup(VersionGroupSummary $versionGroup): self
    {
        $this->initialized['versionGroup'] = true;
        $this->versionGroup = $versionGroup;
        return $this;
    }
    /**
     * @return MoveSummary
     */
    public function getMove(): MoveSummary
    {
        return $this->move;
    }
    /**
     * @param MoveSummary $move
     *
     * @return self
     */
    public function setMove(MoveSummary $move): self
    {
        $this->initialized['move'] = true;
        $this->move = $move;
        return $this;
    }
}