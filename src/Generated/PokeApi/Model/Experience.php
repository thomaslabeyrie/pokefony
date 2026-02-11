<?php

namespace App\Generated\PokeApi\Model;

class Experience extends \ArrayObject
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
    protected $level;
    /**
     * @var int
     */
    protected $experience;
    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }
    /**
     * @param int $level
     *
     * @return self
     */
    public function setLevel(int $level): self
    {
        $this->initialized['level'] = true;
        $this->level = $level;
        return $this;
    }
    /**
     * @return int
     */
    public function getExperience(): int
    {
        return $this->experience;
    }
    /**
     * @param int $experience
     *
     * @return self
     */
    public function setExperience(int $experience): self
    {
        $this->initialized['experience'] = true;
        $this->experience = $experience;
        return $this;
    }
}