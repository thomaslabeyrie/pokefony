<?php

namespace App\Generated\PokeApi\Model;

class NatureBattleStylePreference extends \ArrayObject
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
    protected $lowHpPreference;
    /**
     * @var int
     */
    protected $highHpPreference;
    /**
     * @var MoveBattleStyleSummary
     */
    protected $moveBattleStyle;
    /**
     * @return int
     */
    public function getLowHpPreference(): int
    {
        return $this->lowHpPreference;
    }
    /**
     * @param int $lowHpPreference
     *
     * @return self
     */
    public function setLowHpPreference(int $lowHpPreference): self
    {
        $this->initialized['lowHpPreference'] = true;
        $this->lowHpPreference = $lowHpPreference;
        return $this;
    }
    /**
     * @return int
     */
    public function getHighHpPreference(): int
    {
        return $this->highHpPreference;
    }
    /**
     * @param int $highHpPreference
     *
     * @return self
     */
    public function setHighHpPreference(int $highHpPreference): self
    {
        $this->initialized['highHpPreference'] = true;
        $this->highHpPreference = $highHpPreference;
        return $this;
    }
    /**
     * @return MoveBattleStyleSummary
     */
    public function getMoveBattleStyle(): MoveBattleStyleSummary
    {
        return $this->moveBattleStyle;
    }
    /**
     * @param MoveBattleStyleSummary $moveBattleStyle
     *
     * @return self
     */
    public function setMoveBattleStyle(MoveBattleStyleSummary $moveBattleStyle): self
    {
        $this->initialized['moveBattleStyle'] = true;
        $this->moveBattleStyle = $moveBattleStyle;
        return $this;
    }
}