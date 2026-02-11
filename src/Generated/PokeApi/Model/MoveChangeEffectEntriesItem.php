<?php

namespace App\Generated\PokeApi\Model;

class MoveChangeEffectEntriesItem extends \ArrayObject
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
     * @var string
     */
    protected $shortEffect;
    /**
     * @var MoveChangeEffectEntriesItemLanguage
     */
    protected $language;
    /**
     * @return string
     */
    public function getEffect(): string
    {
        return $this->effect;
    }
    /**
     * @param string $effect
     *
     * @return self
     */
    public function setEffect(string $effect): self
    {
        $this->initialized['effect'] = true;
        $this->effect = $effect;
        return $this;
    }
    /**
     * @return string
     */
    public function getShortEffect(): string
    {
        return $this->shortEffect;
    }
    /**
     * @param string $shortEffect
     *
     * @return self
     */
    public function setShortEffect(string $shortEffect): self
    {
        $this->initialized['shortEffect'] = true;
        $this->shortEffect = $shortEffect;
        return $this;
    }
    /**
     * @return MoveChangeEffectEntriesItemLanguage
     */
    public function getLanguage(): MoveChangeEffectEntriesItemLanguage
    {
        return $this->language;
    }
    /**
     * @param MoveChangeEffectEntriesItemLanguage $language
     *
     * @return self
     */
    public function setLanguage(MoveChangeEffectEntriesItemLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
}