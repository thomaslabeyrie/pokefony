<?php

namespace App\DTO\ApiPokemon;

use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonAbilityDTO
{
    #[Groups(['pokemon'])]
    #[SerializedName('is_hidden')]
    private bool $isHidden;

    #[Groups(['pokemon'])]
    private int $slot;

    #[Groups(['pokemon'])]
    private NamedResourceDTO $ability;

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

    public function getAbility(): NamedResourceDTO
    {
        return $this->ability;
    }

    public function setAbility(NamedResourceDTO $ability): self
    {
        $this->ability = $ability;

        return $this;
    }
}
