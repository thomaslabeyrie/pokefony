<?php

namespace App\Generated\PokeApi\Model;

class TypeDetailSpritesItemItem extends \ArrayObject
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
    protected $nameIcon;

    public function getNameIcon(): string
    {
        return $this->nameIcon;
    }

    public function setNameIcon(string $nameIcon): self
    {
        $this->initialized['nameIcon'] = true;
        $this->nameIcon = $nameIcon;

        return $this;
    }
}
