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
    /**
     * @return string
     */
    public function getFrontDefault(): string
    {
        return $this->frontDefault;
    }
    /**
     * @param string $frontDefault
     *
     * @return self
     */
    public function setFrontDefault(string $frontDefault): self
    {
        $this->initialized['frontDefault'] = true;
        $this->frontDefault = $frontDefault;
        return $this;
    }
}