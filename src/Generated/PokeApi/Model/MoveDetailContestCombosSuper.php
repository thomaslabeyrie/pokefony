<?php

namespace App\Generated\PokeApi\Model;

class MoveDetailContestCombosSuper extends \ArrayObject
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
     * @var list<MoveDetailContestCombosSuperUseBeforeItem>|null
     */
    protected $useBefore;
    /**
     * @var list<MoveDetailContestCombosSuperUseAfterItem>|null
     */
    protected $useAfter;
    /**
     * @return list<MoveDetailContestCombosSuperUseBeforeItem>|null
     */
    public function getUseBefore(): ?array
    {
        return $this->useBefore;
    }
    /**
     * @param list<MoveDetailContestCombosSuperUseBeforeItem>|null $useBefore
     *
     * @return self
     */
    public function setUseBefore(?array $useBefore): self
    {
        $this->initialized['useBefore'] = true;
        $this->useBefore = $useBefore;
        return $this;
    }
    /**
     * @return list<MoveDetailContestCombosSuperUseAfterItem>|null
     */
    public function getUseAfter(): ?array
    {
        return $this->useAfter;
    }
    /**
     * @param list<MoveDetailContestCombosSuperUseAfterItem>|null $useAfter
     *
     * @return self
     */
    public function setUseAfter(?array $useAfter): self
    {
        $this->initialized['useAfter'] = true;
        $this->useAfter = $useAfter;
        return $this;
    }
}