<?php

namespace App\ViewModel\Pokedex;

class ListPageViewModel
{
    /** @var PokedexRowViewModel[] */
    private array $rows;

    public function getRows(): array
    {
        return $this->rows;
    }

    public function setRows(array $rows): ListPageViewModel
    {
        $this->rows = $rows;
        return $this;
    }
}
