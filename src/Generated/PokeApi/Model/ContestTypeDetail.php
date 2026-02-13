<?php

namespace App\Generated\PokeApi\Model;

class ContestTypeDetail extends \ArrayObject
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
     * @var ContestTypeDetailBerryFlavor
     */
    protected $berryFlavor;
    /**
     * @var list<ContestTypeName>
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

    public function getBerryFlavor(): ContestTypeDetailBerryFlavor
    {
        return $this->berryFlavor;
    }

    public function setBerryFlavor(ContestTypeDetailBerryFlavor $berryFlavor): self
    {
        $this->initialized['berryFlavor'] = true;
        $this->berryFlavor = $berryFlavor;

        return $this;
    }

    /**
     * @return list<ContestTypeName>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param list<ContestTypeName> $names
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;

        return $this;
    }
}
