<?php

namespace App\ViewModel\Pokedex;

readonly class PokedexViewModel
{
    public function __construct(
        /** @var PokedexRowViewModel[] */
        public array $entries,

        public int $totalEntries,
    ) {
    }
}
