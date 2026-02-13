<?php

namespace App\Generated\PokeApi\Model;

class ItemDetailSprites extends \ArrayObject
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
    protected $default;

    public function getDefault(): string
    {
        return $this->default;
    }

    public function setDefault(string $default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;

        return $this;
    }
}
