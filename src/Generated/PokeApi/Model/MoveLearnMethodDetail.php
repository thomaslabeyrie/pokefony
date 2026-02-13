<?php

namespace App\Generated\PokeApi\Model;

class MoveLearnMethodDetail extends \ArrayObject
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
     * @var string
     */
    protected $name;
    /**
     * @var list<MoveLearnMethodName>
     */
    protected $names;
    /**
     * @var list<MoveLearnMethodDescription>
     */
    protected $descriptions;
    /**
     * @var list<MoveLearnMethodDetailVersionGroupsItem>
     */
    protected $versionGroups;

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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * @return list<MoveLearnMethodName>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param list<MoveLearnMethodName> $names
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;

        return $this;
    }

    /**
     * @return list<MoveLearnMethodDescription>
     */
    public function getDescriptions(): array
    {
        return $this->descriptions;
    }

    /**
     * @param list<MoveLearnMethodDescription> $descriptions
     */
    public function setDescriptions(array $descriptions): self
    {
        $this->initialized['descriptions'] = true;
        $this->descriptions = $descriptions;

        return $this;
    }

    /**
     * @return list<MoveLearnMethodDetailVersionGroupsItem>
     */
    public function getVersionGroups(): array
    {
        return $this->versionGroups;
    }

    /**
     * @param list<MoveLearnMethodDetailVersionGroupsItem> $versionGroups
     */
    public function setVersionGroups(array $versionGroups): self
    {
        $this->initialized['versionGroups'] = true;
        $this->versionGroups = $versionGroups;

        return $this;
    }
}
