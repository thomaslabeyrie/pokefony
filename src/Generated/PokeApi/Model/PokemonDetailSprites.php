<?php

namespace App\Generated\PokeApi\Model;

class PokemonDetailSprites extends \ArrayObject
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
    protected $frontDefault;

    public function getFrontDefault(): string
    {
        return $this->frontDefault;
    }

    public function setFrontDefault(string $frontDefault): self
    {
        $this->initialized['frontDefault'] = true;
        $this->frontDefault = $frontDefault;

        return $this;
    }
}
