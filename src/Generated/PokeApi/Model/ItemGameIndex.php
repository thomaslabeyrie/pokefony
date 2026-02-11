<?php

namespace App\Generated\PokeApi\Model;

class ItemGameIndex extends \ArrayObject
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
    /**
     * @return int
     */
    public function getGameIndex(): int
    {
        return $this->gameIndex;
    }
    /**
     * @param int $gameIndex
     *
     * @return self
     */
    public function setGameIndex(int $gameIndex): self
    {
        $this->initialized['gameIndex'] = true;
        $this->gameIndex = $gameIndex;
        return $this;
    }
    /**
     * @return GenerationSummary
     */
    public function getGeneration(): GenerationSummary
    {
        return $this->generation;
    }
    /**
     * @param GenerationSummary $generation
     *
     * @return self
     */
    public function setGeneration(GenerationSummary $generation): self
    {
        $this->initialized['generation'] = true;
        $this->generation = $generation;
        return $this;
    }
}