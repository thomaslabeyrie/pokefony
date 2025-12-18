<?php

namespace App\DTO\Pokemon;

class EvolutionChainDTO
{
    public function __construct(
        public readonly array $evolutions,
    ) {}

    public static function fromApiResponse(array $data): self
    {
        $evolutions = self::flattenChain($data['chain']);

        return new self(evolutions: $evolutions);
    }

    /**
     * Transforme la structure récursive en liste plate
     */
    private static function flattenChain(array $chainData): array
    {
        $pokemon = [];

        // Pokémon actuel
        $pokemon[] = [
            'name' => $chainData['species']['name'],
            'url' => $chainData['species']['url'],
            'evolutionDetails' => null,  // Le premier n'a pas de détails d'évolution
        ];

        // Évolutions suivantes (récursif)
        foreach ($chainData['evolves_to'] as $evolution) {
            $pokemon = array_merge($pokemon, self::flattenEvolution($evolution));
        }

        return $pokemon;
    }

    /**
     * Parse une évolution et ses sous-évolutions
     */
    private static function flattenEvolution(array $evolutionData): array
    {
        $pokemon = [];

        $details = $evolutionData['evolution_details'][0] ?? null;

        $pokemon[] = [
            'name' => $evolutionData['species']['name'],
            'url' => $evolutionData['species']['url'],
            'evolutionDetails' => $details ? [
                'minLevel' => $details['min_level'] ?? null,
                'trigger' => $details['trigger']['name'] ?? null,
                'item' => $details['item']['name'] ?? null,
                'minHappiness' => $details['min_happiness'] ?? null,
                'timeOfDay' => $details['time_of_day'] ?? null,
                'heldItem' => $details['held_item']['name'] ?? null,
                'knownMove' => $details['known_move']['name'] ?? null,
                'location' => $details['location']['name'] ?? null,
            ] : null,
        ];

        // Évolutions suivantes (récursif pour gérer les branches comme Eevee)
        foreach ($evolutionData['evolves_to'] as $nextEvolution) {
            $pokemon = array_merge($pokemon, self::flattenEvolution($nextEvolution));
        }

        return $pokemon;
    }

    /**
     * Retourne le Pokémon précédent dans la chaîne
     */
    public function getPreviousEvolution(string $currentName): ?array
    {
        $index = $this->findPokemonIndex($currentName);

        if ($index === null || $index === 0) {
            return null;
        }

        return $this->evolutions[$index - 1];
    }

    /**
     * Retourne le(s) Pokémon suivant(s) dans la chaîne
     */
    public function getNextEvolutions(string $currentName): array
    {
        $index = $this->findPokemonIndex($currentName);

        if ($index === null || $index >= count($this->evolutions) - 1) {
            return [];
        }

        // Retourner toutes les évolutions suivantes directes
        // (pour gérer les branches comme Eevee)
        return array_slice($this->evolutions, $index + 1);
    }

    /**
     * Trouve l'index d'un Pokémon dans la chaîne
     */
    private function findPokemonIndex(string $name): ?int
    {
        foreach ($this->evolutions as $index => $pokemon) {
            if ($pokemon['name'] === $name) {
                return $index;
            }
        }

        return null;
    }
}
