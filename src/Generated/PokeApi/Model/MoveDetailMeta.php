<?php

namespace App\Generated\PokeApi\Model;

class MoveDetailMeta extends \ArrayObject
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

    public function getAilment(): MoveMetaAilmentSummary
    {
        return $this->ailment;
    }

    public function setAilment(MoveMetaAilmentSummary $ailment): self
    {
        $this->initialized['ailment'] = true;
        $this->ailment = $ailment;

        return $this;
    }

    public function getCategory(): MoveMetaCategorySummary
    {
        return $this->category;
    }

    public function setCategory(MoveMetaCategorySummary $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;

        return $this;
    }

    public function getMinHits(): ?int
    {
        return $this->minHits;
    }

    public function setMinHits(?int $minHits): self
    {
        $this->initialized['minHits'] = true;
        $this->minHits = $minHits;

        return $this;
    }

    public function getMaxHits(): ?int
    {
        return $this->maxHits;
    }

    public function setMaxHits(?int $maxHits): self
    {
        $this->initialized['maxHits'] = true;
        $this->maxHits = $maxHits;

        return $this;
    }

    public function getMinTurns(): ?int
    {
        return $this->minTurns;
    }

    public function setMinTurns(?int $minTurns): self
    {
        $this->initialized['minTurns'] = true;
        $this->minTurns = $minTurns;

        return $this;
    }

    public function getMaxTurns(): ?int
    {
        return $this->maxTurns;
    }

    public function setMaxTurns(?int $maxTurns): self
    {
        $this->initialized['maxTurns'] = true;
        $this->maxTurns = $maxTurns;

        return $this;
    }

    public function getDrain(): ?int
    {
        return $this->drain;
    }

    public function setDrain(?int $drain): self
    {
        $this->initialized['drain'] = true;
        $this->drain = $drain;

        return $this;
    }

    public function getHealing(): ?int
    {
        return $this->healing;
    }

    public function setHealing(?int $healing): self
    {
        $this->initialized['healing'] = true;
        $this->healing = $healing;

        return $this;
    }

    public function getCritRate(): ?int
    {
        return $this->critRate;
    }

    public function setCritRate(?int $critRate): self
    {
        $this->initialized['critRate'] = true;
        $this->critRate = $critRate;

        return $this;
    }

    public function getAilmentChance(): ?int
    {
        return $this->ailmentChance;
    }

    public function setAilmentChance(?int $ailmentChance): self
    {
        $this->initialized['ailmentChance'] = true;
        $this->ailmentChance = $ailmentChance;

        return $this;
    }

    public function getFlinchChance(): ?int
    {
        return $this->flinchChance;
    }

    public function setFlinchChance(?int $flinchChance): self
    {
        $this->initialized['flinchChance'] = true;
        $this->flinchChance = $flinchChance;

        return $this;
    }

    public function getStatChance(): ?int
    {
        return $this->statChance;
    }

    public function setStatChance(?int $statChance): self
    {
        $this->initialized['statChance'] = true;
        $this->statChance = $statChance;

        return $this;
    }
}
