<?php

namespace App\Generated\PokeApi\Model;

class ContestEffectFlavorText extends \ArrayObject
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
    protected $flavorText;
    /**
     * @var LanguageSummary
     */
    protected $language;
    /**
     * @return string
     */
    public function getFlavorText(): string
    {
        return $this->flavorText;
    }
    /**
     * @param string $flavorText
     *
     * @return self
     */
    public function setFlavorText(string $flavorText): self
    {
        $this->initialized['flavorText'] = true;
        $this->flavorText = $flavorText;
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