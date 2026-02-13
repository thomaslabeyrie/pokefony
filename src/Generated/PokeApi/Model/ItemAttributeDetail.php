<?php

namespace App\Generated\PokeApi\Model;

class ItemAttributeDetail extends \ArrayObject
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
     * @var list<ItemAttributeDescription>
     */
    protected $descriptions;
    /**
     * @var list<ItemAttributeDetailItemsItem>
     */
    protected $items;
    /**
     * @var list<ItemAttributeName>
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

    /**
     * @return list<ItemAttributeDescription>
     */
    public function getDescriptions(): array
    {
        return $this->descriptions;
    }

    /**
     * @param list<ItemAttributeDescription> $descriptions
     */
    public function setDescriptions(array $descriptions): self
    {
        $this->initialized['descriptions'] = true;
        $this->descriptions = $descriptions;

        return $this;
    }

    /**
     * @return list<ItemAttributeDetailItemsItem>
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param list<ItemAttributeDetailItemsItem> $items
     */
    public function setItems(array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;

        return $this;
    }

    /**
     * @return list<ItemAttributeName>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param list<ItemAttributeName> $names
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;

        return $this;
    }
}
