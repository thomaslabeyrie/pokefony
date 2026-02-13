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

    public function getBabyTriggerItem(): ItemSummary
    {
        return $this->babyTriggerItem;
    }

    public function setBabyTriggerItem(ItemSummary $babyTriggerItem): self
    {
        $this->initialized['babyTriggerItem'] = true;
        $this->babyTriggerItem = $babyTriggerItem;

        return $this;
    }

    public function getChain(): EvolutionChainDetailChain
    {
        return $this->chain;
    }

    public function setChain(EvolutionChainDetailChain $chain): self
    {
        $this->initialized['chain'] = true;
        $this->chain = $chain;

        return $this;
    }
}
