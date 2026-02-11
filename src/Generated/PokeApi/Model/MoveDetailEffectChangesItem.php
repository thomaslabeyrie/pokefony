<?php

namespace App\Generated\PokeApi\Model;

class MoveDetailEffectChangesItem extends \ArrayObject
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
     * @var list<MoveDetailEffectChangesItemEffectEntriesItem>
     */
    protected $effectEntries;
    /**
     * @var MoveDetailEffectChangesItemVersionGroup
     */
    protected $versionGroup;
    /**
     * @return list<MoveDetailEffectChangesItemEffectEntriesItem>
     */
    public function getEffectEntries(): array
    {
        return $this->effectEntries;
    }
    /**
     * @param list<MoveDetailEffectChangesItemEffectEntriesItem> $effectEntries
     *
     * @return self
     */
    public function setEffectEntries(array $effectEntries): self
    {
        $this->initialized['effectEntries'] = true;
        $this->effectEntries = $effectEntries;
        return $this;
    }
    /**
     * @return MoveDetailEffectChangesItemVersionGroup
     */
    public function getVersionGroup(): MoveDetailEffectChangesItemVersionGroup
    {
        return $this->versionGroup;
    }
    /**
     * @param MoveDetailEffectChangesItemVersionGroup $versionGroup
     *
     * @return self
     */
    public function setVersionGroup(MoveDetailEffectChangesItemVersionGroup $versionGroup): self
    {
        $this->initialized['versionGroup'] = true;
        $this->versionGroup = $versionGroup;
        return $this;
    }
}