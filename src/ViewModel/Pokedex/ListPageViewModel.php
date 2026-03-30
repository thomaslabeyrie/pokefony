<?php

namespace App\ViewModel\Pokedex;

readonly class ListPageViewModel
{
    public function __construct(
        /** @var PokedexRowViewModel[] */
        public array $rows,
    ) {
    }
}
