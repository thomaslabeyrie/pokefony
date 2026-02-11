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
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
    /**
     * @return PokeathlonStatDetailAffectingNatures
     */
    public function getAffectingNatures(): PokeathlonStatDetailAffectingNatures
    {
        return $this->affectingNatures;
    }
    /**
     * @param PokeathlonStatDetailAffectingNatures $affectingNatures
     *
     * @return self
     */
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
     *
     * @return self
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
}