<?php

namespace App\Generated\PokeApi\Model;

class ItemDetail extends \ArrayObject
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
    protected $cost;
    /**
     * @var int|null
     */
    protected $flingPower;
    /**
     * @var ItemFlingEffectSummary
     */
    protected $flingEffect;
    /**
     * @var list<ItemDetailAttributesItem>
     */
    protected $attributes;
    /**
     * @var ItemCategorySummary
     */
    protected $category;
    /**
     * @var list<ItemEffectText>
     */
    protected $effectEntries;
    /**
     * @var list<ItemFlavorText>
     */
    protected $flavorTextEntries;
    /**
     * @var list<ItemGameIndex>
     */
    protected $gameIndices;
    /**
     * @var list<ItemName>
     */
    protected $names;
    /**
     * @var list<ItemDetailHeldByPokemonItem>
     */
    protected $heldByPokemon;
    /**
     * @var ItemDetailSprites
     */
    protected $sprites;
    /**
     * @var ItemDetailBabyTriggerFor
     */
    protected $babyTriggerFor;
    /**
     * @var list<ItemDetailMachinesItem>
     */
    protected $machines;

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

    public function getCost(): ?int
    {
        return $this->cost;
    }

    public function setCost(?int $cost): self
    {
        $this->initialized['cost'] = true;
        $this->cost = $cost;

        return $this;
    }

    public function getFlingPower(): ?int
    {
        return $this->flingPower;
    }

    public function setFlingPower(?int $flingPower): self
    {
        $this->initialized['flingPower'] = true;
        $this->flingPower = $flingPower;

        return $this;
    }

    public function getFlingEffect(): ItemFlingEffectSummary
    {
        return $this->flingEffect;
    }

    public function setFlingEffect(ItemFlingEffectSummary $flingEffect): self
    {
        $this->initialized['flingEffect'] = true;
        $this->flingEffect = $flingEffect;

        return $this;
    }

    /**
     * @return list<ItemDetailAttributesItem>
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param list<ItemDetailAttributesItem> $attributes
     */
    public function setAttributes(array $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    public function getCategory(): ItemCategorySummary
    {
        return $this->category;
    }

    public function setCategory(ItemCategorySummary $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;

        return $this;
    }

    /**
     * @return list<ItemEffectText>
     */
    public function getEffectEntries(): array
    {
        return $this->effectEntries;
    }

    /**
     * @param list<ItemEffectText> $effectEntries
     */
    public function setEffectEntries(array $effectEntries): self
    {
        $this->initialized['effectEntries'] = true;
        $this->effectEntries = $effectEntries;

        return $this;
    }

    /**
     * @return list<ItemFlavorText>
     */
    public function getFlavorTextEntries(): array
    {
        return $this->flavorTextEntries;
    }

    /**
     * @param list<ItemFlavorText> $flavorTextEntries
     */
    public function setFlavorTextEntries(array $flavorTextEntries): self
    {
        $this->initialized['flavorTextEntries'] = true;
        $this->flavorTextEntries = $flavorTextEntries;

        return $this;
    }

    /**
     * @return list<ItemGameIndex>
     */
    public function getGameIndices(): array
    {
        return $this->gameIndices;
    }

    /**
     * @param list<ItemGameIndex> $gameIndices
     */
    public function setGameIndices(array $gameIndices): self
    {
        $this->initialized['gameIndices'] = true;
        $this->gameIndices = $gameIndices;

        return $this;
    }

    /**
     * @return list<ItemName>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param list<ItemName> $names
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;

        return $this;
    }

    /**
     * @return list<ItemDetailHeldByPokemonItem>
     */
    public function getHeldByPokemon(): array
    {
        return $this->heldByPokemon;
    }

    /**
     * @param list<ItemDetailHeldByPokemonItem> $heldByPokemon
     */
    public function setHeldByPokemon(array $heldByPokemon): self
    {
        $this->initialized['heldByPokemon'] = true;
        $this->heldByPokemon = $heldByPokemon;

        return $this;
    }

    public function getSprites(): ItemDetailSprites
    {
        return $this->sprites;
    }

    public function setSprites(ItemDetailSprites $sprites): self
    {
        $this->initialized['sprites'] = true;
        $this->sprites = $sprites;

        return $this;
    }

    public function getBabyTriggerFor(): ItemDetailBabyTriggerFor
    {
        return $this->babyTriggerFor;
    }

    public function setBabyTriggerFor(ItemDetailBabyTriggerFor $babyTriggerFor): self
    {
        $this->initialized['babyTriggerFor'] = true;
        $this->babyTriggerFor = $babyTriggerFor;

        return $this;
    }

    /**
     * @return list<ItemDetailMachinesItem>
     */
    public function getMachines(): array
    {
        return $this->machines;
    }

    /**
     * @param list<ItemDetailMachinesItem> $machines
     */
    public function setMachines(array $machines): self
    {
        $this->initialized['machines'] = true;
        $this->machines = $machines;

        return $this;
    }
}
