<?php

namespace App\Generated\PokeApi\Model;

class ItemFlingEffectDetail extends \ArrayObject
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
     * @var list<ItemFlingEffectEffectText>
     */
    protected $effectEntries;
    /**
     * @var list<ItemSummary>
     */
    protected $items;

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
     * @return list<ItemFlingEffectEffectText>
     */
    public function getEffectEntries(): array
    {
        return $this->effectEntries;
    }

    /**
     * @param list<ItemFlingEffectEffectText> $effectEntries
     */
    public function setEffectEntries(array $effectEntries): self
    {
        $this->initialized['effectEntries'] = true;
        $this->effectEntries = $effectEntries;

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
     */
    public function setItems(array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;

        return $this;
    }
}
