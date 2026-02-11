<?php

namespace App\Generated\PokeApi\Model;

class PokemonFormDetailFormNamesItem extends \ArrayObject
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
     * @var PokemonFormDetailFormNamesItemLanguage
     */
    protected $language;
    /**
     * @var string
     */
    protected $name;
    /**
     * @return PokemonFormDetailFormNamesItemLanguage
     */
    public function getLanguage(): PokemonFormDetailFormNamesItemLanguage
    {
        return $this->language;
    }
    /**
     * @param PokemonFormDetailFormNamesItemLanguage $language
     *
     * @return self
     */
    public function setLanguage(PokemonFormDetailFormNamesItemLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}