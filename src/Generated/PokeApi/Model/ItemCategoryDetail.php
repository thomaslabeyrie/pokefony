<?php

namespace App\Generated\PokeApi\Model;

class ItemCategoryDetail extends \ArrayObject
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
     * @var list<ItemSummary>
     */
    protected $items;
    /**
     * @var list<ItemCategoryName>
     */
    protected $names;
    /**
     * @var ItemPocketSummary
     */
    protected $pocket;
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
     * @return list<ItemSummary>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * @param list<ItemSummary> $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * @return list<ItemCategoryName>
     */
    public function getNames(): array
    {
        return $this->names;
    }
    /**
     * @param list<ItemCategoryName> $names
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
     * @return ItemPocketSummary
     */
    public function getPocket(): ItemPocketSummary
    {
        return $this->pocket;
    }
    /**
     * @param ItemPocketSummary $pocket
     *
     * @return self
     */
    public function setPocket(ItemPocketSummary $pocket): self
    {
        $this->initialized['pocket'] = true;
        $this->pocket = $pocket;
        return $this;
    }
}