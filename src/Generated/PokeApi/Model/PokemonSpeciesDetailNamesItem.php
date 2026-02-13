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

    public function getLanguage(): PokemonSpeciesDetailNamesItemLanguage
    {
        return $this->language;
    }

    public function setLanguage(PokemonSpeciesDetailNamesItemLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

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
}
