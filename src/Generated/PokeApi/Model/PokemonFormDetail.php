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
     * @return int|null
     */
    public function getOrder(): ?int
    {
        return $this->order;
    }
    /**
     * @param int|null $order
     *
     * @return self
     */
    public function setOrder(?int $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getFormOrder(): ?int
    {
        return $this->formOrder;
    }
    /**
     * @param int|null $formOrder
     *
     * @return self
     */
    public function setFormOrder(?int $formOrder): self
    {
        $this->initialized['formOrder'] = true;
        $this->formOrder = $formOrder;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }
    /**
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault): self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsBattleOnly(): bool
    {
        return $this->isBattleOnly;
    }
    /**
     * @param bool $isBattleOnly
     *
     * @return self
     */
    public function setIsBattleOnly(bool $isBattleOnly): self
    {
        $this->initialized['isBattleOnly'] = true;
        $this->isBattleOnly = $isBattleOnly;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsMega(): bool
    {
        return $this->isMega;
    }
    /**
     * @param bool $isMega
     *
     * @return self
     */
    public function setIsMega(bool $isMega): self
    {
        $this->initialized['isMega'] = true;
        $this->isMega = $isMega;
        return $this;
    }
    /**
     * @return string
     */
    public function getFormName(): string
    {
        return $this->formName;
    }
    /**
     * @param string $formName
     *
     * @return self
     */
    public function setFormName(string $formName): self
    {
        $this->initialized['formName'] = true;
        $this->formName = $formName;
        return $this;
    }
    /**
     * @return PokemonSummary
     */
    public function getPokemon(): PokemonSummary
    {
        return $this->pokemon;
    }
    /**
     * @param PokemonSummary $pokemon
     *
     * @return self
     */
    public function setPokemon(PokemonSummary $pokemon): self
    {
        $this->initialized['pokemon'] = true;
        $this->pokemon = $pokemon;
        return $this;
    }
    /**
     * @return PokemonFormDetailSprites
     */
    public function getSprites(): PokemonFormDetailSprites
    {
        return $this->sprites;
    }
    /**
     * @param PokemonFormDetailSprites $sprites
     *
     * @return self
     */
    public function setSprites(PokemonFormDetailSprites $sprites): self
    {
        $this->initialized['sprites'] = true;
        $this->sprites = $sprites;
        return $this;
    }
    /**
     * @return VersionGroupSummary
     */
    public function getVersionGroup(): VersionGroupSummary
    {
        return $this->versionGroup;
    }
    /**
     * @param VersionGroupSummary $versionGroup
     *
     * @return self
     */
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
     *
     * @return self
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
     *
     * @return self
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
     *
     * @return self
     */
    public function setTypes(array $types): self
    {
        $this->initialized['types'] = true;
        $this->types = $types;
        return $this;
    }
}