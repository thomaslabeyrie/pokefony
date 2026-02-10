<?php

namespace App\DTO\Common;

use Symfony\Component\Serializer\Attribute\SerializedName;

class GenerationGameIndexDTO
{
    #[SerializedName('game_index')]
    private int $gameIndex;

    private NamedResourceDTO $generation;

    public function getGameIndex(): int
    {
        return $this->gameIndex;
    }

    public function setGameIndex(int $gameIndex): self
    {
        $this->gameIndex = $gameIndex;
        return $this;
    }

    public function getGeneration(): NamedResourceDTO
    {
        return $this->generation;
    }

    public function setGeneration(NamedResourceDTO $generation): self
    {
        $this->generation = $generation;
        return $this;
    }
}
