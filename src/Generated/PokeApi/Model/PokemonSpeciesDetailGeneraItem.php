<?php

namespace App\Generated\PokeApi\Model;

class PokemonSpeciesDetailGeneraItem extends \ArrayObject
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
    protected $genus;
    /**
     * @var PokemonSpeciesDetailGeneraItemLanguage
     */
    protected $language;
    /**
     * @return string
     */
    public function getGenus(): string
    {
        return $this->genus;
    }
    /**
     * @param string $genus
     *
     * @return self
     */
    public function setGenus(string $genus): self
    {
        $this->initialized['genus'] = true;
        $this->genus = $genus;
        return $this;
    }
    /**
     * @return PokemonSpeciesDetailGeneraItemLanguage
     */
    public function getLanguage(): PokemonSpeciesDetailGeneraItemLanguage
    {
        return $this->language;
    }
    /**
     * @param PokemonSpeciesDetailGeneraItemLanguage $language
     *
     * @return self
     */
    public function setLanguage(PokemonSpeciesDetailGeneraItemLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
}