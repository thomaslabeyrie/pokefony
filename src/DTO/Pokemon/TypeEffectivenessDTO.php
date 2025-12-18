<?php

namespace App\DTO\Pokemon;

class TypeEffectivenessDTO
{
    public function __construct(
        public readonly array $weaknesses,
        public readonly array $resistances,
        public readonly array $immunities,
    ) {}

    /**
     * Calcule l'efficacité depuis les données brutes de l'API
     */
    public static function fromTypes(array $typesData): self
    {
        $multipliers = [];

        foreach ($typesData as $typeInfo) {
            $damageRelations = $typeInfo['details']['damage_relations'];

            // Double damage (faiblesses)
            foreach ($damageRelations['double_damage_from'] as $weakType) {
                $typeName = $weakType['name'];
                $multipliers[$typeName] = ($multipliers[$typeName] ?? 1) * 2;
            }

            // Half damage (résistances)
            foreach ($damageRelations['half_damage_from'] as $resistType) {
                $typeName = $resistType['name'];
                $multipliers[$typeName] = ($multipliers[$typeName] ?? 1) * 0.5;
            }

            // No damage (immunités)
            foreach ($damageRelations['no_damage_from'] as $immuneType) {
                $typeName = $immuneType['name'];
                $multipliers[$typeName] = 0;
            }
        }

        // Séparer en catégories
        $weaknesses = [];
        $resistances = [];
        $immunities = [];

        foreach ($multipliers as $type => $multiplier) {
            if ($multiplier > 1) {
                $weaknesses[$type] = $multiplier;
            } elseif ($multiplier == 0) {
                $immunities[] = $type;
            } elseif ($multiplier < 1) {
                $resistances[$type] = $multiplier;
            }
        }

        return new self(
            weaknesses: $weaknesses,
            resistances: $resistances,
            immunities: $immunities
        );
    }

    /**
     * Calcule l'efficacité depuis des TypeDTO déjà créés
     * (utile si tu as déjà les TypeDTO ailleurs)
     */
    public static function fromTypeDTOs(array $types): self
    {
        $multipliers = [];

        foreach ($types as $type) {
            foreach ($type->damageRelations->doubleDamageFrom as $weakType) {
                $multipliers[$weakType] = ($multipliers[$weakType] ?? 1) * 2;
            }

            foreach ($type->damageRelations->halfDamageFrom as $resistType) {
                $multipliers[$resistType] = ($multipliers[$resistType] ?? 1) * 0.5;
            }

            foreach ($type->damageRelations->noDamageFrom as $immuneType) {
                $multipliers[$immuneType] = 0;
            }
        }

        $weaknesses = [];
        $resistances = [];
        $immunities = [];

        foreach ($multipliers as $type => $multiplier) {
            if ($multiplier > 1) {
                $weaknesses[$type] = $multiplier;
            } elseif ($multiplier == 0) {
                $immunities[] = $type;
            } elseif ($multiplier < 1) {
                $resistances[$type] = $multiplier;
            }
        }

        return new self(
            weaknesses: $weaknesses,
            resistances: $resistances,
            immunities: $immunities
        );
    }
}
