<?php

namespace App\Factory\Embeddable;

use App\Entity\Embeddable\Moveset;
use Zenstruck\Foundry\ObjectFactory;

/**
 * @extends ObjectFactory<Moveset>
 */
final class MovesetFactory extends ObjectFactory
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
        return Moveset::class;
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
            'move1' => self::faker()->word(),
            'move2' => self::faker()->word(),
            'move3' => self::faker()->word(),
            'move4' => self::faker()->word(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    #[\Override]
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Moveset $moveset): void {})
        ;
    }
}
