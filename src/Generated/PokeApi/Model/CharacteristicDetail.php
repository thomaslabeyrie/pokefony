<?php

namespace App\Generated\PokeApi\Model;

class CharacteristicDetail extends \ArrayObject
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
     * @var int
     */
    protected $geneModulo;
    /**
     * @var list<int>
     */
    protected $possibleValues;
    /**
     * @var StatSummary
     */
    protected $highestStat;
    /**
     * @var list<CharacteristicDescription>
     */
    protected $descriptions;

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

    public function getGeneModulo(): int
    {
        return $this->geneModulo;
    }

    public function setGeneModulo(int $geneModulo): self
    {
        $this->initialized['geneModulo'] = true;
        $this->geneModulo = $geneModulo;

        return $this;
    }

    /**
     * @return list<int>
     */
    public function getPossibleValues(): array
    {
        return $this->possibleValues;
    }

    /**
     * @param list<int> $possibleValues
     */
    public function setPossibleValues(array $possibleValues): self
    {
        $this->initialized['possibleValues'] = true;
        $this->possibleValues = $possibleValues;

        return $this;
    }

    public function getHighestStat(): StatSummary
    {
        return $this->highestStat;
    }

    public function setHighestStat(StatSummary $highestStat): self
    {
        $this->initialized['highestStat'] = true;
        $this->highestStat = $highestStat;

        return $this;
    }

    /**
     * @return list<CharacteristicDescription>
     */
    public function getDescriptions(): array
    {
        return $this->descriptions;
    }

    /**
     * @param list<CharacteristicDescription> $descriptions
     */
    public function setDescriptions(array $descriptions): self
    {
        $this->initialized['descriptions'] = true;
        $this->descriptions = $descriptions;

        return $this;
    }
}
