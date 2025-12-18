<?php

namespace App\DTO\Pokedex;

class PokedexEntryDTO
{
    public function __construct(
        public readonly string $name,
        public readonly int $id,
        public readonly string $artwork,
        public readonly array $types,
    ) {}

    public static function fromApiResponse(
        array $pokemonData,
    ): self {
        return new self(
            name: $pokemonData['name'],
            id: $pokemonData['id'],
            artwork: $pokemonData['sprites']['other']['official-artwork']['front_default'],
            types: array_map(fn($entry) => $entry['type']['name'], $pokemonData['types']),
        );
    }
}
