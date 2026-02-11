<?php

namespace App\Generated\PokeApi\Model;

class PokemonSpeciesDetailNamesItem extends \ArrayObject
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
     * @var PokemonSpeciesDetailNamesItemLanguage
     */
    protected $language;
    /**
     * @var string
     */
    protected $name;
    /**
     * @return PokemonSpeciesDetailNamesItemLanguage
     */
    public function getLanguage(): PokemonSpeciesDetailNamesItemLanguage
    {
        return $this->language;
    }
    /**
     * @param PokemonSpeciesDetailNamesItemLanguage $language
     *
     * @return self
     */
    public function setLanguage(PokemonSpeciesDetailNamesItemLanguage $language): self
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