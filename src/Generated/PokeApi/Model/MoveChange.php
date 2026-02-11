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
    /**
     * @return int|null
     */
    public function getAccuracy(): ?int
    {
        return $this->accuracy;
    }
    /**
     * @param int|null $accuracy
     *
     * @return self
     */
    public function setAccuracy(?int $accuracy): self
    {
        $this->initialized['accuracy'] = true;
        $this->accuracy = $accuracy;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getPower(): ?int
    {
        return $this->power;
    }
    /**
     * @param int|null $power
     *
     * @return self
     */
    public function setPower(?int $power): self
    {
        $this->initialized['power'] = true;
        $this->power = $power;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getPp(): ?int
    {
        return $this->pp;
    }
    /**
     * @param int|null $pp
     *
     * @return self
     */
    public function setPp(?int $pp): self
    {
        $this->initialized['pp'] = true;
        $this->pp = $pp;
        return $this;
    }
    /**
     * @return int
     */
    public function getEffectChance(): int
    {
        return $this->effectChance;
    }
    /**
     * @param int $effectChance
     *
     * @return self
     */
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
     * @return TypeSummary
     */
    public function getType(): TypeSummary
    {
        return $this->type;
    }
    /**
     * @param TypeSummary $type
     *
     * @return self
     */
    public function setType(TypeSummary $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
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
}