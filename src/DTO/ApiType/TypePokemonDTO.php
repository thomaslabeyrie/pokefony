<?php

namespace App\DTO\ApiType;

use App\DTO\Common\NamedResourceDTO;

class TypePokemonDTO
{
    private int $slot;

    private NamedResourceDTO $pokemon;

    public function getSlot(): int
    {
        return $this->slot;
    }

    public function setSlot(int $slot): self
    {
        $this->slot = $slot;

        return $this;
    }

    public function getPokemon(): NamedResourceDTO
    {
        return $this->pokemon;
    }

    public function setPokemon(NamedResourceDTO $pokemon): self
    {
        $this->pokemon = $pokemon;

        return $this;
    }
}
