<?php

namespace App\Generated\PokeApi\Model;

class AbilityDetail extends \ArrayObject
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
    protected $isMainSeries;
    /**
     * @var GenerationSummary
     */
    protected $generation;
    /**
     * @var list<AbilityName>
     */
    protected $names;
    /**
     * @var list<AbilityEffectText>
     */
    protected $effectEntries;
    /**
     * @var list<AbilityChange>
     */
    protected $effectChanges;
    /**
     * @var list<AbilityFlavorText>
     */
    protected $flavorTextEntries;
    /**
     * @var list<AbilityDetailPokemonItem>
     */
    protected $pokemon;

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

    public function getIsMainSeries(): bool
    {
        return $this->isMainSeries;
    }

    public function setIsMainSeries(bool $isMainSeries): self
    {
        $this->initialized['isMainSeries'] = true;
        $this->isMainSeries = $isMainSeries;

        return $this;
    }

    public function getGeneration(): GenerationSummary
    {
        return $this->generation;
    }

    public function setGeneration(GenerationSummary $generation): self
    {
        $this->initialized['generation'] = true;
        $this->generation = $generation;

        return $this;
    }

    /**
     * @return list<AbilityName>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param list<AbilityName> $names
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;

        return $this;
    }

    /**
     * @return list<AbilityEffectText>
     */
    public function getEffectEntries(): array
    {
        return $this->effectEntries;
    }

    /**
     * @param list<AbilityEffectText> $effectEntries
     */
    public function setEffectEntries(array $effectEntries): self
    {
        $this->initialized['effectEntries'] = true;
        $this->effectEntries = $effectEntries;

        return $this;
    }

    /**
     * @return list<AbilityChange>
     */
    public function getEffectChanges(): array
    {
        return $this->effectChanges;
    }

    /**
     * @param list<AbilityChange> $effectChanges
     */
    public function setEffectChanges(array $effectChanges): self
    {
        $this->initialized['effectChanges'] = true;
        $this->effectChanges = $effectChanges;

        return $this;
    }

    /**
     * @return list<AbilityFlavorText>
     */
    public function getFlavorTextEntries(): array
    {
        return $this->flavorTextEntries;
    }

    /**
     * @param list<AbilityFlavorText> $flavorTextEntries
     */
    public function setFlavorTextEntries(array $flavorTextEntries): self
    {
        $this->initialized['flavorTextEntries'] = true;
        $this->flavorTextEntries = $flavorTextEntries;

        return $this;
    }

    /**
     * @return list<AbilityDetailPokemonItem>
     */
    public function getPokemon(): array
    {
        return $this->pokemon;
    }

    /**
     * @param list<AbilityDetailPokemonItem> $pokemon
     */
    public function setPokemon(array $pokemon): self
    {
        $this->initialized['pokemon'] = true;
        $this->pokemon = $pokemon;

        return $this;
    }
}
