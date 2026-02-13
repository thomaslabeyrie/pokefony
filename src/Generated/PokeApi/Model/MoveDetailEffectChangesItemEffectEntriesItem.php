<?php

namespace App\Generated\PokeApi\Model;

class MoveDetailEffectChangesItemEffectEntriesItem extends \ArrayObject
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
    protected $effect;
    /**
     * @var MoveDetailEffectChangesItemEffectEntriesItemLanguage
     */
    protected $language;

    public function getEffect(): string
    {
        return $this->effect;
    }

    public function setEffect(string $effect): self
    {
        $this->initialized['effect'] = true;
        $this->effect = $effect;

        return $this;
    }

    public function getLanguage(): MoveDetailEffectChangesItemEffectEntriesItemLanguage
    {
        return $this->language;
    }

    public function setLanguage(MoveDetailEffectChangesItemEffectEntriesItemLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }
}
