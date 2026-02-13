<?php

namespace App\Generated\PokeApi\Model;

class BerryFirmnessName extends \ArrayObject
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
    protected $name;
    /**
     * @var LanguageSummary
     */
    protected $language;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

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
