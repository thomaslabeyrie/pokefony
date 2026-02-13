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

    public function getAwesomeName(): string
    {
        return $this->awesomeName;
    }

    public function setAwesomeName(string $awesomeName): self
    {
        $this->initialized['awesomeName'] = true;
        $this->awesomeName = $awesomeName;

        return $this;
    }

    public function getLanguage(): PokemonShapeDetailAwesomeNamesItemLanguage
    {
        return $this->language;
    }

    public function setLanguage(PokemonShapeDetailAwesomeNamesItemLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }
}
