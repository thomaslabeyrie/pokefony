<?php

namespace App\Service;

use App\PokeApiClient\DTO\Type\TypeDTO;

class DamageMultipliersCalculator
{
    // const
    protected array $defaultMultipliers = [
        'normal' => 1,
        'fire' => 1,
        'water' => 1,
        'electric' => 1,
        'grass' => 1,
        'ice' => 1,
        'fighting' => 1,
        'poison' => 1,
        'ground' => 1,
        'flying' => 1,
        'psychic' => 1,
        'bug' => 1,
        'rock' => 1,
        'ghost' => 1,
        'dragon' => 1,
        'dark' => 1,
        'steel' => 1,
        'fairy' => 1,
    ];
    
    // static
    /**
     * @param TypeDTO[] $types
     * @return array<string, float>
     */
    public function calculateDamageMultipliers(array $types): array
    {
        $damageMultipliers = $this->defaultMultipliers;

        foreach ($types as $type) {
            // Calculate weaknesses
            foreach ($type->damageRelations->doubleDamageFrom as $weakness) {
                $damageMultipliers[$weakness->name] *= 2;
            }

            // Calculate resistances
            foreach ($type->damageRelations->halfDamageFrom as $resistance) {
                $damageMultipliers[$resistance->name] /= 2;
            }

            // Immunities
            foreach ($type->damageRelations->noDamageFrom as $immunity) {
                $damageMultipliers[$immunity->name] = 0;
            }
        }

        return $damageMultipliers;
    }
}
