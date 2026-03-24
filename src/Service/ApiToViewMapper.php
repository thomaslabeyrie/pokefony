<?php

namespace App\Service;

use App\PokeApiClient\DTO\Pokemon\PokemonDTO;
use App\ViewModel\Pokedex\ListPageViewModel;
use App\ViewModel\Pokedex\PokedexRowViewModel;
use App\ViewModel\Pokedex\SpriteViewModel;

readonly class ApiToViewMapper
{
    /** @param PokemonDTO[] $pokemons */
    public function listPage(array $pokemons): ListPageViewModel
    {
        $listPage = new ListPageViewModel();

        $rows = array_map(
            fn($pokemon) => $this->pokedexRow($pokemon),
            $pokemons
        );

        $listPage->setRows($rows);

        return $listPage;
    }

    private function pokedexRow(PokemonDTO $pokemon): PokedexRowViewModel
    {
        $row = new PokedexRowViewModel();

        $row->setSprite($this->sprite($pokemon))
            ->setName($pokemon->name)
            ->setTypes(array_map(fn($entry) => $entry->type->name, $pokemon->types))
            ->setPokedexNumber($pokemon->id + 1);

        return $row;
    }

    private function sprite(PokemonDTO $pokemon): SpriteViewModel
    {
        $sprite = new SpriteViewModel();

        $sprite->setUrl($pokemon->sprites->other->officialArtwork->frontDefault);

        return $sprite;
    }
}
