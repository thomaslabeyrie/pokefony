<?php

namespace App\DTO\Pokemon;

class AbilityDTO
{
    public function __construct(
        public readonly string $name,
        public readonly bool $isHidden,
        public readonly int $slot,
    ) {}

    public static function fromApiResponse(array $data): self
    {
        return new self(
            name: $data['ability']['name'],
            isHidden: $data['is_hidden'],
            slot: $data['slot'],
        );
    }
}
