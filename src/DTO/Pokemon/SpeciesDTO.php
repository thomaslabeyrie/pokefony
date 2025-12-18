<?php

namespace App\DTO\Pokemon;

class SpeciesDTO
{
    public function __construct(
        public readonly int $captureRate,
        public readonly int $genderRate,
        public readonly string $growthRate,
        public readonly ?string $evolvesFrom,
        public readonly array $flavorTextEntries,
        public readonly array $genera,
    ) {}

    public static function fromApiResponse(array $data): self
    {
        return new self(
            captureRate: $data['capture_rate'],
            genderRate: $data['gender_rate'],
            growthRate: $data['growth_rate']['name'],
            evolvesFrom: $data['evolves_from_species']['name'] ?? null,
            flavorTextEntries: self::formatFlavorTexts($data['flavor_text_entries']),
            genera: array_find($data['genera'], fn($entry) => $entry['language']['name'] === 'en'),

        );
    }

    private static function formatFlavorTexts(array $entries): array
    {
        $formatted = [];
        foreach ($entries as $entry) {
            if ($entry['language']['name'] === 'en') {
                $formatted[$entry['version']['name']] = $entry['flavor_text'];
            }
        }

        return $formatted;
    }
}
