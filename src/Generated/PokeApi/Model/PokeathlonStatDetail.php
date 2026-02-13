<?php

namespace App\Generated\PokeApi\Model;

class PokeathlonStatDetail extends \ArrayObject
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
     * @var PokeathlonStatDetailAffectingNatures
     */
    protected $affectingNatures;
    /**
     * @var list<PokeathlonStatName>
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

    public function getAffectingNatures(): PokeathlonStatDetailAffectingNatures
    {
        return $this->affectingNatures;
    }

    public function setAffectingNatures(PokeathlonStatDetailAffectingNatures $affectingNatures): self
    {
        $this->initialized['affectingNatures'] = true;
        $this->affectingNatures = $affectingNatures;

        return $this;
    }

    /**
     * @return list<PokeathlonStatName>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param list<PokeathlonStatName> $names
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;

        return $this;
    }
}
