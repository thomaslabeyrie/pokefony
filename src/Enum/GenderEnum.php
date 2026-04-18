<?php

namespace App\Enum;

use App\PokeApiClient\DTO\PokemonSpecies\PokemonSpeciesDTO;

enum GenderEnum: string
{
    case MALE = 'male';
    case FEMALE = 'female';
    case GENDERLESS = 'genderless';

    public static function getFromSpecies(PokemonSpeciesDTO $species): array
    {
        return match($species->hasGenderDifferences) {
            $species->hasGenderDifferences => [self::MALE, self::FEMALE],
            default => [self::GENDERLESS],
        };
    }

    public function getLabel(): string
    {
        return match($this) {
            self::MALE => 'Male',
            self::FEMALE => 'Female',
            self::GENDERLESS => 'Genderless',
        };
    }
}
