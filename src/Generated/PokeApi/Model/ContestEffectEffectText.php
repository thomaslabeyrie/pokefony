<?php

namespace App\Generated\PokeApi\Model;

class ContestEffectEffectText extends \ArrayObject
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
     * @var LanguageSummary
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
     * @return LanguageSummary
     */
    public function getLanguage(): LanguageSummary
    {
        return $this->language;
    }
    /**
     * @param LanguageSummary $language
     *
     * @return self
     */
    public function setLanguage(LanguageSummary $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
}