<?php

namespace App\Generated\PokeApi\Model;

class PokemonShapeDetailAwesomeNamesItem extends \ArrayObject
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
    protected $awesomeName;
    /**
     * @var PokemonShapeDetailAwesomeNamesItemLanguage
     */
    protected $language;
    /**
     * @return string
     */
    public function getAwesomeName(): string
    {
        return $this->awesomeName;
    }
    /**
     * @param string $awesomeName
     *
     * @return self
     */
    public function setAwesomeName(string $awesomeName): self
    {
        $this->initialized['awesomeName'] = true;
        $this->awesomeName = $awesomeName;
        return $this;
    }
    /**
     * @return PokemonShapeDetailAwesomeNamesItemLanguage
     */
    public function getLanguage(): PokemonShapeDetailAwesomeNamesItemLanguage
    {
        return $this->language;
    }
    /**
     * @param PokemonShapeDetailAwesomeNamesItemLanguage $language
     *
     * @return self
     */
    public function setLanguage(PokemonShapeDetailAwesomeNamesItemLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
}