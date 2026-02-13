<?php

namespace App\Generated\PokeApi\Model;

class BerryDetail extends \ArrayObject
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
     * @var int
     */
    protected $growthTime;
    /**
     * @var int
     */
    protected $maxHarvest;
    /**
     * @var int
     */
    protected $naturalGiftPower;
    /**
     * @var int
     */
    protected $size;
    /**
     * @var int
     */
    protected $smoothness;
    /**
     * @var int
     */
    protected $soilDryness;
    /**
     * @var BerryFirmnessSummary
     */
    protected $firmness;
    /**
     * @var list<BerryDetailFlavorsItem>
     */
    protected $flavors;
    /**
     * @var ItemSummary
     */
    protected $item;
    /**
     * @var TypeSummary
     */
    protected $naturalGiftType;

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

    public function getGrowthTime(): int
    {
        return $this->growthTime;
    }

    public function setGrowthTime(int $growthTime): self
    {
        $this->initialized['growthTime'] = true;
        $this->growthTime = $growthTime;

        return $this;
    }

    public function getMaxHarvest(): int
    {
        return $this->maxHarvest;
    }

    public function setMaxHarvest(int $maxHarvest): self
    {
        $this->initialized['maxHarvest'] = true;
        $this->maxHarvest = $maxHarvest;

        return $this;
    }

    public function getNaturalGiftPower(): int
    {
        return $this->naturalGiftPower;
    }

    public function setNaturalGiftPower(int $naturalGiftPower): self
    {
        $this->initialized['naturalGiftPower'] = true;
        $this->naturalGiftPower = $naturalGiftPower;

        return $this;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;

        return $this;
    }

    public function getSmoothness(): int
    {
        return $this->smoothness;
    }

    public function setSmoothness(int $smoothness): self
    {
        $this->initialized['smoothness'] = true;
        $this->smoothness = $smoothness;

        return $this;
    }

    public function getSoilDryness(): int
    {
        return $this->soilDryness;
    }

    public function setSoilDryness(int $soilDryness): self
    {
        $this->initialized['soilDryness'] = true;
        $this->soilDryness = $soilDryness;

        return $this;
    }

    public function getFirmness(): BerryFirmnessSummary
    {
        return $this->firmness;
    }

    public function setFirmness(BerryFirmnessSummary $firmness): self
    {
        $this->initialized['firmness'] = true;
        $this->firmness = $firmness;

        return $this;
    }

    /**
     * @return list<BerryDetailFlavorsItem>
     */
    public function getFlavors(): array
    {
        return $this->flavors;
    }

    /**
     * @param list<BerryDetailFlavorsItem> $flavors
     */
    public function setFlavors(array $flavors): self
    {
        $this->initialized['flavors'] = true;
        $this->flavors = $flavors;

        return $this;
    }

    public function getItem(): ItemSummary
    {
        return $this->item;
    }

    public function setItem(ItemSummary $item): self
    {
        $this->initialized['item'] = true;
        $this->item = $item;

        return $this;
    }

    public function getNaturalGiftType(): TypeSummary
    {
        return $this->naturalGiftType;
    }

    public function setNaturalGiftType(TypeSummary $naturalGiftType): self
    {
        $this->initialized['naturalGiftType'] = true;
        $this->naturalGiftType = $naturalGiftType;

        return $this;
    }
}
