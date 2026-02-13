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

    public function getVersion(): VersionSummary
    {
        return $this->version;
    }

    public function setVersion(VersionSummary $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;

        return $this;
    }
}
