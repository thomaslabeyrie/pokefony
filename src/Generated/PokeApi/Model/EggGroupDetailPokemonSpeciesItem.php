<?php

namespace App\Generated\PokeApi\Model;

class EggGroupDetailPokemonSpeciesItem extends \ArrayObject
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
     * Pokemon species name.
     *
     * @var string
     */
    protected $name;
    /**
     * The URL to get more information about the species.
     *
     * @var string
     */
    protected $url;

    /**
     * Pokemon species name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Pokemon species name.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The URL to get more information about the species.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * The URL to get more information about the species.
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }
}
