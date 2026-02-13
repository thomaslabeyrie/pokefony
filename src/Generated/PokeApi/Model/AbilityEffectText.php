<?php

namespace App\Generated\PokeApi\Model;

class AbilityEffectText extends \ArrayObject
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
     * @var LanguageSummary
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

    public function getShortEffect(): string
    {
        return $this->shortEffect;
    }

    public function setShortEffect(string $shortEffect): self
    {
        $this->initialized['shortEffect'] = true;
        $this->shortEffect = $shortEffect;

        return $this;
    }

    public function getLanguage(): LanguageSummary
    {
        return $this->language;
    }

    public function setLanguage(LanguageSummary $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }
}
