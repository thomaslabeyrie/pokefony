<?php

namespace App\DTO\ApiPokemon;

use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\Groups;

class PokemonTypeDTO
{
    #[Groups(['pokemon'])]
    private int $slot;

    #[Groups(['pokemon', 'pokedex'])]
    private NamedResourceDTO $type;

    public function getSlot(): int
    {
        return $this->slot;
    }

    public function setSlot(int $slot): self
    {
        $this->slot = $slot;
        return $this;
    }

    public function getType(): NamedResourceDTO
    {
        return $this->type;
    }

    public function setType(NamedResourceDTO $type): self
    {
        $this->type = $type;
        return $this;
    }
}
