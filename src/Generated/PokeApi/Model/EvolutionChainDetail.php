<?php

namespace App\Generated\PokeApi\Model;

class EvolutionChainDetail extends \ArrayObject
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
     * @var ItemSummary
     */
    protected $babyTriggerItem;
    /**
     * @var EvolutionChainDetailChain
     */
    protected $chain;
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
     * @return ItemSummary
     */
    public function getBabyTriggerItem(): ItemSummary
    {
        return $this->babyTriggerItem;
    }
    /**
     * @param ItemSummary $babyTriggerItem
     *
     * @return self
     */
    public function setBabyTriggerItem(ItemSummary $babyTriggerItem): self
    {
        $this->initialized['babyTriggerItem'] = true;
        $this->babyTriggerItem = $babyTriggerItem;
        return $this;
    }
    /**
     * @return EvolutionChainDetailChain
     */
    public function getChain(): EvolutionChainDetailChain
    {
        return $this->chain;
    }
    /**
     * @param EvolutionChainDetailChain $chain
     *
     * @return self
     */
    public function setChain(EvolutionChainDetailChain $chain): self
    {
        $this->initialized['chain'] = true;
        $this->chain = $chain;
        return $this;
    }
}