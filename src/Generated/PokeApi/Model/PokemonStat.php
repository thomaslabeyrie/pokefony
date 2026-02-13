<?php

namespace App\Generated\PokeApi\Model;

class PokemonStat extends \ArrayObject
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
    protected $baseStat;
    /**
     * @var int
     */
    protected $effort;
    /**
     * @var StatSummary
     */
    protected $stat;

    public function getBaseStat(): int
    {
        return $this->baseStat;
    }

    public function setBaseStat(int $baseStat): self
    {
        $this->initialized['baseStat'] = true;
        $this->baseStat = $baseStat;

        return $this;
    }

    public function getEffort(): int
    {
        return $this->effort;
    }

    public function setEffort(int $effort): self
    {
        $this->initialized['effort'] = true;
        $this->effort = $effort;

        return $this;
    }

    public function getStat(): StatSummary
    {
        return $this->stat;
    }

    public function setStat(StatSummary $stat): self
    {
        $this->initialized['stat'] = true;
        $this->stat = $stat;

        return $this;
    }
}
