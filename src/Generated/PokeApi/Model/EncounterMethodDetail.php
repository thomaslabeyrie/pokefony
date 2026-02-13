<?php

namespace App\Generated\PokeApi\Model;

class EncounterMethodDetail extends \ArrayObject
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
     * @var list<EncounterMethodName>
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

    /**
     * @return list<EncounterMethodName>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param list<EncounterMethodName> $names
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;

        return $this;
    }
}
