<?php

namespace App\Generated\PokeApi\Model;

class PokemonDetailCries extends \ArrayObject
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
     * @var string
     */
    protected $latest;
    /**
     * @var string
     */
    protected $legacy;

    public function getLatest(): string
    {
        return $this->latest;
    }

    public function setLatest(string $latest): self
    {
        $this->initialized['latest'] = true;
        $this->latest = $latest;

        return $this;
    }

    public function getLegacy(): string
    {
        return $this->legacy;
    }

    public function setLegacy(string $legacy): self
    {
        $this->initialized['legacy'] = true;
        $this->legacy = $legacy;

        return $this;
    }
}
