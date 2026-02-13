<?php

namespace App\Generated\PokeApi\Model;

class MoveDamageClassDescription extends \ArrayObject
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
    protected $description;
    /**
     * @var LanguageSummary
     */
    protected $language;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

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
