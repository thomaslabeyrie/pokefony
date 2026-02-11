<?php

namespace App\Generated\PokeApi\Model;

class EncounterConditionValueDetail extends \ArrayObject
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
     * @var EncounterConditionSummary
     */
    protected $condition;
    /**
     * @var list<EncounterConditionValueName>
     */
    protected $names;
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return EncounterConditionSummary
     */
    public function getCondition(): EncounterConditionSummary
    {
        return $this->condition;
    }
    /**
     * @param EncounterConditionSummary $condition
     *
     * @return self
     */
    public function setCondition(EncounterConditionSummary $condition): self
    {
        $this->initialized['condition'] = true;
        $this->condition = $condition;
        return $this;
    }
    /**
     * @return list<EncounterConditionValueName>
     */
    public function getNames(): array
    {
        return $this->names;
    }
    /**
     * @param list<EncounterConditionValueName> $names
     *
     * @return self
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
}