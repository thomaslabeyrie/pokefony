<?php

namespace App\DTO\Pokemon;

class DamageRelationsDTO
{
    public function __construct(
        public readonly array $doubleDmgFrom,
        public readonly array $halfDmgFrom,
        public readonly array $noDmgFrom,
        // public readonly array $doubleDmgTo,
        // public readonly array $halfDmgTo,
        // public readonly array $noDmgTo,
    ) {}

    public static function fromApiResponse(array $dmgRelations): self
    {
        return new self(
            doubleDmgFrom: array_map(fn($type) => $type['name'], $dmgRelations['double_damage_from'] ?? []),
            halfDmgFrom: array_map(fn($type) => $type['name'], $dmgRelations['half_damage_from'] ?? []),
            noDmgFrom: array_map(fn($type) => $type['name'], $dmgRelations['no_damage_from'] ?? []),
            // doubleDmgTo: array_map(fn($type) => $type['name'], $dmgRelations['double_damage_to'] ?? []),
            // halfDmgTo: array_map(fn($type) => $type['name'], $dmgRelations['half_damage_to'] ?? []),
            // noDmgTo: array_map(fn($type) => $type['name'], $dmgRelations['no_damage_to'] ?? []),
        );
    }
}
