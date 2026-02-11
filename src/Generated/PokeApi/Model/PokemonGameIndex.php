<?php

namespace App\Generated\PokeApi\Model;

class PokemonGameIndex extends \ArrayObject
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
     * @var VersionSummary
     */
    protected $version;
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
     * @return VersionSummary
     */
    public function getVersion(): VersionSummary
    {
        return $this->version;
    }
    /**
     * @param VersionSummary $version
     *
     * @return self
     */
    public function setVersion(VersionSummary $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}