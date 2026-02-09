<?php

namespace App\DTO\ApiPokemon;

use App\DTO\ApiPokemon\Common\NamedResource;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class Ability
{
    #[Groups(['pokemon'])]
    #[SerializedName('is_hidden')]
    private bool $isHidden;

    #[Groups(['pokemon'])]
    private int $slot;

    #[Groups(['pokemon'])]
    private NamedResource $ability;

    public function isHidden(): bool
    {
        return $this->isHidden;
    }

    public function setIsHidden(bool $isHidden): self
    {
        $this->isHidden = $isHidden;
        return $this;
    }

    public function getSlot(): int
    {
        return $this->slot;
    }

    public function setSlot(int $slot): self
    {
        $this->slot = $slot;
        return $this;
    }

    public function getAbility(): NamedResource
    {
        return $this->ability;
    }

    public function setAbility(NamedResource $ability): self
    {
        $this->ability = $ability;
        return $this;
    }
}
