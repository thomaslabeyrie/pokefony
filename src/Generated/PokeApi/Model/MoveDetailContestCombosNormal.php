<?php

namespace App\Generated\PokeApi\Model;

class MoveDetailContestCombosNormal extends \ArrayObject
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
     * @var list<MoveDetailContestCombosNormalUseBeforeItem>|null
     */
    protected $useBefore;
    /**
     * @var list<MoveDetailContestCombosNormalUseAfterItem>|null
     */
    protected $useAfter;
    /**
     * @return list<MoveDetailContestCombosNormalUseBeforeItem>|null
     */
    public function getUseBefore(): ?array
    {
        return $this->useBefore;
    }
    /**
     * @param list<MoveDetailContestCombosNormalUseBeforeItem>|null $useBefore
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
     * @return list<MoveDetailContestCombosNormalUseAfterItem>|null
     */
    public function getUseAfter(): ?array
    {
        return $this->useAfter;
    }
    /**
     * @param list<MoveDetailContestCombosNormalUseAfterItem>|null $useAfter
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