<?php

namespace App\Generated\PokeApi\Model;

class LocationGameIndex extends \ArrayObject
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
    protected $gameIndex;
    /**
     * @var GenerationSummary
     */
    protected $generation;

    public function getGameIndex(): int
    {
        return $this->gameIndex;
    }

    public function setGameIndex(int $gameIndex): self
    {
        $this->initialized['gameIndex'] = true;
        $this->gameIndex = $gameIndex;

        return $this;
    }

    public function getGeneration(): GenerationSummary
    {
        return $this->generation;
    }

    public function setGeneration(GenerationSummary $generation): self
    {
        $this->initialized['generation'] = true;
        $this->generation = $generation;

        return $this;
    }
}
