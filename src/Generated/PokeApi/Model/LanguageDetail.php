<?php

namespace App\Generated\PokeApi\Model;

class LanguageDetail extends \ArrayObject
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
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $official;
    /**
     * @var string
     */
    protected $iso639;
    /**
     * @var string
     */
    protected $iso3166;
    /**
     * @var list<LanguageName>
     */
    protected $names;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

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

    public function getOfficial(): bool
    {
        return $this->official;
    }

    public function setOfficial(bool $official): self
    {
        $this->initialized['official'] = true;
        $this->official = $official;

        return $this;
    }

    public function getIso639(): string
    {
        return $this->iso639;
    }

    public function setIso639(string $iso639): self
    {
        $this->initialized['iso639'] = true;
        $this->iso639 = $iso639;

        return $this;
    }

    public function getIso3166(): string
    {
        return $this->iso3166;
    }

    public function setIso3166(string $iso3166): self
    {
        $this->initialized['iso3166'] = true;
        $this->iso3166 = $iso3166;

        return $this;
    }

    /**
     * @return list<LanguageName>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param list<LanguageName> $names
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;

        return $this;
    }
}
