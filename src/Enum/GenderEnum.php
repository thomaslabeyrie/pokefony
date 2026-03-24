<?php

namespace App\Enum;

use App\PokeApiClient\DTO\PokemonSpecies\PokemonSpeciesDTO;

enum GenderEnum: string
{
    case Male = 'male';
    case Female = 'female';
    case Genderless = 'genderless';

    public static function getFromSpecies(PokemonSpeciesDTO $species): array
    {
        return match($species->hasGenderDifferences) {
            $species->hasGenderDifferences => [self::Male, self::Female],
            default => [self::Genderless],
        };
    }
}
