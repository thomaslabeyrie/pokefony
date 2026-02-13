<?php

namespace App\Generated\PokeApi\Model;

class MoveChange extends \ArrayObject
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
     * @var int|null
     */
    protected $accuracy;
    /**
     * @var int|null
     */
    protected $power;
    /**
     * @var int|null
     */
    protected $pp;
    /**
     * @var int
     */
    protected $effectChance;
    /**
     * @var list<MoveChangeEffectEntriesItem>
     */
    protected $effectEntries;
    /**
     * @var TypeSummary
     */
    protected $type;
    /**
     * @var VersionGroupSummary
     */
    protected $versionGroup;

    public function getAccuracy(): ?int
    {
        return $this->accuracy;
    }

    public function setAccuracy(?int $accuracy): self
    {
        $this->initialized['accuracy'] = true;
        $this->accuracy = $accuracy;

        return $this;
    }

    public function getPower(): ?int
    {
        return $this->power;
    }

    public function setPower(?int $power): self
    {
        $this->initialized['power'] = true;
        $this->power = $power;

        return $this;
    }

    public function getPp(): ?int
    {
        return $this->pp;
    }

    public function setPp(?int $pp): self
    {
        $this->initialized['pp'] = true;
        $this->pp = $pp;

        return $this;
    }

    public function getEffectChance(): int
    {
        return $this->effectChance;
    }

    public function setEffectChance(int $effectChance): self
    {
        $this->initialized['effectChance'] = true;
        $this->effectChance = $effectChance;

        return $this;
    }

    /**
     * @return list<MoveChangeEffectEntriesItem>
     */
    public function getEffectEntries(): array
    {
        return $this->effectEntries;
    }

    /**
     * @param list<MoveChangeEffectEntriesItem> $effectEntries
     */
    public function setEffectEntries(array $effectEntries): self
    {
        $this->initialized['effectEntries'] = true;
        $this->effectEntries = $effectEntries;

        return $this;
    }

    public function getType(): TypeSummary
    {
        return $this->type;
    }

    public function setType(TypeSummary $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

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
}
