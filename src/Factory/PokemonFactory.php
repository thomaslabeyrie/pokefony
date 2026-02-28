<?php

namespace App\Factory;

use App\Entity\Pokemon;
use App\Enum\GenderEnum;
use App\Enum\NatureEnum;
use App\Factory\Embeddable\EVsFactory;
use App\Factory\Embeddable\IVsFactory;
use App\Factory\Embeddable\MovesetFactory;
use Zenstruck\Foundry\Persistence\PersistentObjectFactory;

/**
 * @extends PersistentObjectFactory<Pokemon>
 */
final class PokemonFactory extends PersistentObjectFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
    }

    #[\Override]
    public static function class(): string
    {
        return Pokemon::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    #[\Override]
    protected function defaults(): array|callable
    {
        return [
            'ability' => self::faker()->word(),
            'eVs' => EVsFactory::new(),
            'gender' => self::faker()->randomElement(GenderEnum::cases()),
            'happiness' => self::faker()->numberBetween(0, 255),
            'heldItem' => self::faker()->word(),
            'iVs' => IVsFactory::new(),
            'isShiny' => self::faker()->boolean(),
            'level' => self::faker()->numberBetween(0, 100),
            'moveset' => MovesetFactory::new(),
            'nature' => self::faker()->randomElement(NatureEnum::cases()),
            'nickname' => self::faker()->firstName(),
            'pokemonId' => self::faker()->numberBetween(0, 1000),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    #[\Override]
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Pokemon $pokemon): void {})
        ;
    }
}
