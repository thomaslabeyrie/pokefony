<?php

namespace App\Generated\PokeApi\Model;

class PokemonFormDetail extends \ArrayObject
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
     * @var int|null
     */
    protected $order;
    /**
     * @var int|null
     */
    protected $formOrder;
    /**
     * @var bool
     */
    protected $isDefault;
    /**
     * @var bool
     */
    protected $isBattleOnly;
    /**
     * @var bool
     */
    protected $isMega;
    /**
     * @var string
     */
    protected $formName;
    /**
     * @var PokemonSummary
     */
    protected $pokemon;
    /**
     * @var PokemonFormDetailSprites
     */
    protected $sprites;
    /**
     * @var VersionGroupSummary
     */
    protected $versionGroup;
    /**
     * @var list<PokemonFormDetailFormNamesItem>
     */
    protected $formNames;
    /**
     * @var list<PokemonFormDetailNamesItem>
     */
    protected $names;
    /**
     * @var list<PokemonFormDetailTypesItem>
     */
    protected $types;

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

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(?int $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    public function getFormOrder(): ?int
    {
        return $this->formOrder;
    }

    public function setFormOrder(?int $formOrder): self
    {
        $this->initialized['formOrder'] = true;
        $this->formOrder = $formOrder;

        return $this;
    }

    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(bool $isDefault): self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;

        return $this;
    }

    public function getIsBattleOnly(): bool
    {
        return $this->isBattleOnly;
    }

    public function setIsBattleOnly(bool $isBattleOnly): self
    {
        $this->initialized['isBattleOnly'] = true;
        $this->isBattleOnly = $isBattleOnly;

        return $this;
    }

    public function getIsMega(): bool
    {
        return $this->isMega;
    }

    public function setIsMega(bool $isMega): self
    {
        $this->initialized['isMega'] = true;
        $this->isMega = $isMega;

        return $this;
    }

    public function getFormName(): string
    {
        return $this->formName;
    }

    public function setFormName(string $formName): self
    {
        $this->initialized['formName'] = true;
        $this->formName = $formName;

        return $this;
    }

    public function getPokemon(): PokemonSummary
    {
        return $this->pokemon;
    }

    public function setPokemon(PokemonSummary $pokemon): self
    {
        $this->initialized['pokemon'] = true;
        $this->pokemon = $pokemon;

        return $this;
    }

    public function getSprites(): PokemonFormDetailSprites
    {
        return $this->sprites;
    }

    public function setSprites(PokemonFormDetailSprites $sprites): self
    {
        $this->initialized['sprites'] = true;
        $this->sprites = $sprites;

        return $this;
    }

    public function getVersionGroup(): VersionGroupSummary
    {
        return $this->versionGroup;
    }

    public function setVersionGroup(VersionGroupSummary $versionGroup): self
    {
        $this->initialized['versionGroup'] = true;
        $this->versionGroup = $versionGroup;

        return $this;
    }

    /**
     * @return list<PokemonFormDetailFormNamesItem>
     */
    public function getFormNames(): array
    {
        return $this->formNames;
    }

    /**
     * @param list<PokemonFormDetailFormNamesItem> $formNames
     */
    public function setFormNames(array $formNames): self
    {
        $this->initialized['formNames'] = true;
        $this->formNames = $formNames;

        return $this;
    }

    /**
     * @return list<PokemonFormDetailNamesItem>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param list<PokemonFormDetailNamesItem> $names
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;

        return $this;
    }

    /**
     * @return list<PokemonFormDetailTypesItem>
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * @param list<PokemonFormDetailTypesItem> $types
     */
    public function setTypes(array $types): self
    {
        $this->initialized['types'] = true;
        $this->types = $types;

        return $this;
    }
}
