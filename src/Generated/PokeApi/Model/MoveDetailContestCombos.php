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

    public function getNormal(): MoveDetailContestCombosNormal
    {
        return $this->normal;
    }

    public function setNormal(MoveDetailContestCombosNormal $normal): self
    {
        $this->initialized['normal'] = true;
        $this->normal = $normal;

        return $this;
    }

    public function getSuper(): MoveDetailContestCombosSuper
    {
        return $this->super;
    }

    public function setSuper(MoveDetailContestCombosSuper $super): self
    {
        $this->initialized['super'] = true;
        $this->super = $super;

        return $this;
    }
}
