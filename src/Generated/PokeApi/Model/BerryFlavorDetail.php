<?php

namespace App\Generated\PokeApi\Model;

class BerryFlavorDetail extends \ArrayObject
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
     * @var list<BerryFlavorDetailBerriesItem>
     */
    protected $berries;
    /**
     * @var ContestTypeSummary
     */
    protected $contestType;
    /**
     * @var list<BerryFlavorName>
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
     * @return list<BerryFlavorDetailBerriesItem>
     */
    public function getBerries(): array
    {
        return $this->berries;
    }

    /**
     * @param list<BerryFlavorDetailBerriesItem> $berries
     */
    public function setBerries(array $berries): self
    {
        $this->initialized['berries'] = true;
        $this->berries = $berries;

        return $this;
    }

    public function getContestType(): ContestTypeSummary
    {
        return $this->contestType;
    }

    public function setContestType(ContestTypeSummary $contestType): self
    {
        $this->initialized['contestType'] = true;
        $this->contestType = $contestType;

        return $this;
    }

    /**
     * @return list<BerryFlavorName>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param list<BerryFlavorName> $names
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;

        return $this;
    }
}
