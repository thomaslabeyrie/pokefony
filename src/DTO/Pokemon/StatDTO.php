<?php

namespace App\DTO\Pokemon;

class StatDTO
{
    public function __construct(
        public readonly string $name,
        public readonly int $baseStat,
        public readonly int $effort,
    ) {}

    public static function fromApiResponse(array $data): self
    {
        return new self(
            name: $data['stat']['name'],
            baseStat: $data['base_stat'],
            effort: $data['effort'],
        );
    }
}
