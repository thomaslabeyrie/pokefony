<?php

namespace App\Generated\PokeApi\Model;

class ContestEffectDetail extends \ArrayObject
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
     * @var int
     */
    protected $appeal;
    /**
     * @var int
     */
    protected $jam;
    /**
     * @var list<ContestEffectEffectText>
     */
    protected $effectEntries;
    /**
     * @var list<ContestEffectFlavorText>
     */
    protected $flavorTextEntries;
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
     * @return int
     */
    public function getAppeal(): int
    {
        return $this->appeal;
    }
    /**
     * @param int $appeal
     *
     * @return self
     */
    public function setAppeal(int $appeal): self
    {
        $this->initialized['appeal'] = true;
        $this->appeal = $appeal;
        return $this;
    }
    /**
     * @return int
     */
    public function getJam(): int
    {
        return $this->jam;
    }
    /**
     * @param int $jam
     *
     * @return self
     */
    public function setJam(int $jam): self
    {
        $this->initialized['jam'] = true;
        $this->jam = $jam;
        return $this;
    }
    /**
     * @return list<ContestEffectEffectText>
     */
    public function getEffectEntries(): array
    {
        return $this->effectEntries;
    }
    /**
     * @param list<ContestEffectEffectText> $effectEntries
     *
     * @return self
     */
    public function setEffectEntries(array $effectEntries): self
    {
        $this->initialized['effectEntries'] = true;
        $this->effectEntries = $effectEntries;
        return $this;
    }
    /**
     * @return list<ContestEffectFlavorText>
     */
    public function getFlavorTextEntries(): array
    {
        return $this->flavorTextEntries;
    }
    /**
     * @param list<ContestEffectFlavorText> $flavorTextEntries
     *
     * @return self
     */
    public function setFlavorTextEntries(array $flavorTextEntries): self
    {
        $this->initialized['flavorTextEntries'] = true;
        $this->flavorTextEntries = $flavorTextEntries;
        return $this;
    }
}