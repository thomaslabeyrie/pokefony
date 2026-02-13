<?php

namespace App\Generated\PokeApi\Model;

class BerryDetailFlavorsItemFlavor extends \ArrayObject
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
     * The name of the flavor.
     *
     * @var string
     */
    protected $name;
    /**
     * The URL to get more information about the flavor.
     *
     * @var string
     */
    protected $url;

    /**
     * The name of the flavor.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the flavor.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The URL to get more information about the flavor.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * The URL to get more information about the flavor.
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }
}
