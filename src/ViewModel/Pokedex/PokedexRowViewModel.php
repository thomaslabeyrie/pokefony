<?php

namespace App\ViewModel\Pokedex;

class PokedexRowViewModel
{
    private SpriteViewModel $sprite;
    private string $name;
    private array $types;
    private int $pokedexNumber;

    public function getSprite(): SpriteViewModel
    {
        return $this->sprite;
    }

    public function setSprite(SpriteViewModel $sprite): PokedexRowViewModel
    {
        $this->sprite = $sprite;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): PokedexRowViewModel
    {
        $this->name = $name;
        return $this;
    }

    public function getTypes(): array
    {
        return $this->types;
    }

    public function setTypes(array $types): PokedexRowViewModel
    {
        $this->types = $types;
        return $this;
    }

    public function getPokedexNumber(): int
    {
        return $this->pokedexNumber;
    }

    public function setPokedexNumber(int $pokedexNumber): PokedexRowViewModel
    {
        $this->pokedexNumber = $pokedexNumber;
        return $this;
    }
}
