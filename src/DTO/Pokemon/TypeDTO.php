<?php

namespace App\DTO\Pokemon;

class TypeDTO
{
    public function __construct(
        public readonly string $name,
        public readonly int $slot,
        public readonly DamageRelationsDTO $damageRelations,
    ) {
    }

    public static function fromApiResponse(array $type): self
    {
        return new self(
            name: $type['name'],
            slot: $type['slot'],
            damageRelations: DamageRelationsDTO::fromApiResponse($type['details']['damage_relations'])
        );
    }
}
