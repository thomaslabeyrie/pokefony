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
     */
    public function setEffectEntries(array $effectEntries): self
    {
        $this->initialized['effectEntries'] = true;
        $this->effectEntries = $effectEntries;

        return $this;
    }

    public function getVersionGroup(): MoveDetailEffectChangesItemVersionGroup
    {
        return $this->versionGroup;
    }

    public function setVersionGroup(MoveDetailEffectChangesItemVersionGroup $versionGroup): self
    {
        $this->initialized['versionGroup'] = true;
        $this->versionGroup = $versionGroup;

        return $this;
    }
}
