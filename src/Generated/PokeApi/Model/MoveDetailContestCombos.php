<?php

namespace App\Generated\PokeApi\Model;

class MoveDetailContestCombos extends \ArrayObject
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
     * @var MoveDetailContestCombosNormal
     */
    protected $normal;
    /**
     * @var MoveDetailContestCombosSuper
     */
    protected $super;
    /**
     * @return MoveDetailContestCombosNormal
     */
    public function getNormal(): MoveDetailContestCombosNormal
    {
        return $this->normal;
    }
    /**
     * @param MoveDetailContestCombosNormal $normal
     *
     * @return self
     */
    public function setNormal(MoveDetailContestCombosNormal $normal): self
    {
        $this->initialized['normal'] = true;
        $this->normal = $normal;
        return $this;
    }
    /**
     * @return MoveDetailContestCombosSuper
     */
    public function getSuper(): MoveDetailContestCombosSuper
    {
        return $this->super;
    }
    /**
     * @param MoveDetailContestCombosSuper $super
     *
     * @return self
     */
    public function setSuper(MoveDetailContestCombosSuper $super): self
    {
        $this->initialized['super'] = true;
        $this->super = $super;
        return $this;
    }
}