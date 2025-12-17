<?php

namespace App\DTO;

class PokemonDTO
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly int $height,
        public readonly int $weight,
        public readonly int $baseExperience,
        public readonly array $types,
        public readonly array $abilities,
        public readonly array $stats,
        public readonly SpritesDTO $sprites,
        public readonly TypeEffectivenessDTO $effectiveness,
        public readonly SpeciesDTO $species,
        public readonly EvolutionChainDTO $evolutionChain,  // ← Nouveau
    ) {}

    public static function fromApiResponse(
        array $data,
        array $speciesData,
        array $typesData,
        array $evolutionChainData  // ← Nouveau paramètre
    ): self {
        return new self(
            id: $data['id'],
            name: $data['name'],
            height: $data['height'],
            weight: $data['weight'],
            baseExperience: $data['base_experience'] ?? 0,
            types: array_map(fn($type) => TypeDTO::fromApiResponse($type), $typesData),
            abilities: array_map(fn($ability) => AbilityDTO::fromApiResponse($ability), $data['abilities']),
            stats: array_map(fn($stat) => StatDTO::fromApiResponse($stat), $data['stats']),
            sprites: SpritesDTO::fromApiResponse($data['sprites']),
            effectiveness: TypeEffectivenessDTO::fromTypes($typesData),
            species: SpeciesDTO::fromApiResponse($speciesData),
            evolutionChain: EvolutionChainDTO::fromApiResponse($evolutionChainData),
        );
    }

    /**
     * Retourne l'évolution précédente
     */
    public function getPreviousEvolution(): ?array
    {
        return $this->evolutionChain->getPreviousEvolution($this->name);
    }

    /**
     * Retourne les évolutions suivantes
     */
    public function getNextEvolutions(): array
    {
        return $this->evolutionChain->getNextEvolutions($this->name);
    }
}
