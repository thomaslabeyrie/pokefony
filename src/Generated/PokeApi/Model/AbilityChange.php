<?php

namespace App\Generated\PokeApi\Model;

class AbilityChange extends \ArrayObject
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
     * @var VersionGroupSummary
     */
    protected $versionGroup;
    /**
     * @var list<AbilityChangeEffectText>
     */
    protected $effectEntries;

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

    /**
     * @return list<AbilityChangeEffectText>
     */
    public function getEffectEntries(): array
    {
        return $this->effectEntries;
    }

    /**
     * @param list<AbilityChangeEffectText> $effectEntries
     */
    public function setEffectEntries(array $effectEntries): self
    {
        $this->initialized['effectEntries'] = true;
        $this->effectEntries = $effectEntries;

        return $this;
    }
}
