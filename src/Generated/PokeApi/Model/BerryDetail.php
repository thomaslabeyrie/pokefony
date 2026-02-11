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
     * @return int
     */
    public function getGrowthTime(): int
    {
        return $this->growthTime;
    }
    /**
     * @param int $growthTime
     *
     * @return self
     */
    public function setGrowthTime(int $growthTime): self
    {
        $this->initialized['growthTime'] = true;
        $this->growthTime = $growthTime;
        return $this;
    }
    /**
     * @return int
     */
    public function getMaxHarvest(): int
    {
        return $this->maxHarvest;
    }
    /**
     * @param int $maxHarvest
     *
     * @return self
     */
    public function setMaxHarvest(int $maxHarvest): self
    {
        $this->initialized['maxHarvest'] = true;
        $this->maxHarvest = $maxHarvest;
        return $this;
    }
    /**
     * @return int
     */
    public function getNaturalGiftPower(): int
    {
        return $this->naturalGiftPower;
    }
    /**
     * @param int $naturalGiftPower
     *
     * @return self
     */
    public function setNaturalGiftPower(int $naturalGiftPower): self
    {
        $this->initialized['naturalGiftPower'] = true;
        $this->naturalGiftPower = $naturalGiftPower;
        return $this;
    }
    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
    /**
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * @return int
     */
    public function getSmoothness(): int
    {
        return $this->smoothness;
    }
    /**
     * @param int $smoothness
     *
     * @return self
     */
    public function setSmoothness(int $smoothness): self
    {
        $this->initialized['smoothness'] = true;
        $this->smoothness = $smoothness;
        return $this;
    }
    /**
     * @return int
     */
    public function getSoilDryness(): int
    {
        return $this->soilDryness;
    }
    /**
     * @param int $soilDryness
     *
     * @return self
     */
    public function setSoilDryness(int $soilDryness): self
    {
        $this->initialized['soilDryness'] = true;
        $this->soilDryness = $soilDryness;
        return $this;
    }
    /**
     * @return BerryFirmnessSummary
     */
    public function getFirmness(): BerryFirmnessSummary
    {
        return $this->firmness;
    }
    /**
     * @param BerryFirmnessSummary $firmness
     *
     * @return self
     */
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
     *
     * @return self
     */
    public function setFlavors(array $flavors): self
    {
        $this->initialized['flavors'] = true;
        $this->flavors = $flavors;
        return $this;
    }
    /**
     * @return ItemSummary
     */
    public function getItem(): ItemSummary
    {
        return $this->item;
    }
    /**
     * @param ItemSummary $item
     *
     * @return self
     */
    public function setItem(ItemSummary $item): self
    {
        $this->initialized['item'] = true;
        $this->item = $item;
        return $this;
    }
    /**
     * @return TypeSummary
     */
    public function getNaturalGiftType(): TypeSummary
    {
        return $this->naturalGiftType;
    }
    /**
     * @param TypeSummary $naturalGiftType
     *
     * @return self
     */
    public function setNaturalGiftType(TypeSummary $naturalGiftType): self
    {
        $this->initialized['naturalGiftType'] = true;
        $this->naturalGiftType = $naturalGiftType;
        return $this;
    }
}