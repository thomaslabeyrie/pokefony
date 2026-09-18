<?php

namespace App\ViewModel\Pokedex;

use App\ViewModel\Common\SpriteViewModel;

readonly class PokedexRowViewModel
{
    public function __construct(
        public string $spriteUrl,
        public string $name,
        public array $types,
        public int $pokedexNumber,
    ) {}
}
