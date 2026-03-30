<?php

namespace App\ViewModel\Pokedex;

use App\ViewModel\Common\SpriteViewModel;

readonly class PokedexRowViewModel
{
    public function __construct(
        public SpriteViewModel $sprite,
        public string $name,
        public array $types,
        public int $pokedexNumber,
    ) {
    }
}
