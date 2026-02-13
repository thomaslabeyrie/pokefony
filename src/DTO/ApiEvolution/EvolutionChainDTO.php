<?php

namespace App\DTO\ApiEvolution;

use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class EvolutionChainDTO
{
    private int $id;

    #[SerializedName('baby_trigger_item')]
    private ?NamedResourceDTO $babyTriggerItem = null;

    private ChainLinkDTO $chain;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getBabyTriggerItem(): ?NamedResourceDTO
    {
        return $this->babyTriggerItem;
    }

    public function setBabyTriggerItem(?NamedResourceDTO $babyTriggerItem): self
    {
        $this->babyTriggerItem = $babyTriggerItem;

        return $this;
    }

    public function getChain(): ChainLinkDTO
    {
        return $this->chain;
    }

    public function setChain(ChainLinkDTO $chain): self
    {
        $this->chain = $chain;

        return $this;
    }
}
