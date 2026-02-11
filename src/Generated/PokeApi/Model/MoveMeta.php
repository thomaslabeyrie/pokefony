<?php

namespace App\Generated\PokeApi\Model;

class MoveMeta extends \ArrayObject
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
     * @var MoveMetaAilmentSummary
     */
    protected $ailment;
    /**
     * @var MoveMetaCategorySummary
     */
    protected $category;
    /**
     * @var int|null
     */
    protected $minHits;
    /**
     * @var int|null
     */
    protected $maxHits;
    /**
     * @var int|null
     */
    protected $minTurns;
    /**
     * @var int|null
     */
    protected $maxTurns;
    /**
     * @var int|null
     */
    protected $drain;
    /**
     * @var int|null
     */
    protected $healing;
    /**
     * @var int|null
     */
    protected $critRate;
    /**
     * @var int|null
     */
    protected $ailmentChance;
    /**
     * @var int|null
     */
    protected $flinchChance;
    /**
     * @var int|null
     */
    protected $statChance;
    /**
     * @return MoveMetaAilmentSummary
     */
    public function getAilment(): MoveMetaAilmentSummary
    {
        return $this->ailment;
    }
    /**
     * @param MoveMetaAilmentSummary $ailment
     *
     * @return self
     */
    public function setAilment(MoveMetaAilmentSummary $ailment): self
    {
        $this->initialized['ailment'] = true;
        $this->ailment = $ailment;
        return $this;
    }
    /**
     * @return MoveMetaCategorySummary
     */
    public function getCategory(): MoveMetaCategorySummary
    {
        return $this->category;
    }
    /**
     * @param MoveMetaCategorySummary $category
     *
     * @return self
     */
    public function setCategory(MoveMetaCategorySummary $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getMinHits(): ?int
    {
        return $this->minHits;
    }
    /**
     * @param int|null $minHits
     *
     * @return self
     */
    public function setMinHits(?int $minHits): self
    {
        $this->initialized['minHits'] = true;
        $this->minHits = $minHits;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getMaxHits(): ?int
    {
        return $this->maxHits;
    }
    /**
     * @param int|null $maxHits
     *
     * @return self
     */
    public function setMaxHits(?int $maxHits): self
    {
        $this->initialized['maxHits'] = true;
        $this->maxHits = $maxHits;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getMinTurns(): ?int
    {
        return $this->minTurns;
    }
    /**
     * @param int|null $minTurns
     *
     * @return self
     */
    public function setMinTurns(?int $minTurns): self
    {
        $this->initialized['minTurns'] = true;
        $this->minTurns = $minTurns;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getMaxTurns(): ?int
    {
        return $this->maxTurns;
    }
    /**
     * @param int|null $maxTurns
     *
     * @return self
     */
    public function setMaxTurns(?int $maxTurns): self
    {
        $this->initialized['maxTurns'] = true;
        $this->maxTurns = $maxTurns;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getDrain(): ?int
    {
        return $this->drain;
    }
    /**
     * @param int|null $drain
     *
     * @return self
     */
    public function setDrain(?int $drain): self
    {
        $this->initialized['drain'] = true;
        $this->drain = $drain;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getHealing(): ?int
    {
        return $this->healing;
    }
    /**
     * @param int|null $healing
     *
     * @return self
     */
    public function setHealing(?int $healing): self
    {
        $this->initialized['healing'] = true;
        $this->healing = $healing;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getCritRate(): ?int
    {
        return $this->critRate;
    }
    /**
     * @param int|null $critRate
     *
     * @return self
     */
    public function setCritRate(?int $critRate): self
    {
        $this->initialized['critRate'] = true;
        $this->critRate = $critRate;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getAilmentChance(): ?int
    {
        return $this->ailmentChance;
    }
    /**
     * @param int|null $ailmentChance
     *
     * @return self
     */
    public function setAilmentChance(?int $ailmentChance): self
    {
        $this->initialized['ailmentChance'] = true;
        $this->ailmentChance = $ailmentChance;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getFlinchChance(): ?int
    {
        return $this->flinchChance;
    }
    /**
     * @param int|null $flinchChance
     *
     * @return self
     */
    public function setFlinchChance(?int $flinchChance): self
    {
        $this->initialized['flinchChance'] = true;
        $this->flinchChance = $flinchChance;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getStatChance(): ?int
    {
        return $this->statChance;
    }
    /**
     * @param int|null $statChance
     *
     * @return self
     */
    public function setStatChance(?int $statChance): self
    {
        $this->initialized['statChance'] = true;
        $this->statChance = $statChance;
        return $this;
    }
}