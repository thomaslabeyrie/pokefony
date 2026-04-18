<?php

namespace App\Factory\Embeddable;

use App\Entity\Embeddable\EVs;
use Zenstruck\Foundry\ObjectFactory;

/**
 * @extends ObjectFactory<EVs>
 */
final class EVsFactory extends ObjectFactory
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
        return EVs::class;
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
            'atk' => self::faker()->numberBetween(0, 255),
            'def' => self::faker()->numberBetween(0, 255),
            'hp' => self::faker()->numberBetween(0, 255),
            'spAtk' => self::faker()->numberBetween(0, 255),
            'spDef' => self::faker()->numberBetween(0, 255),
            'speed' => self::faker()->numberBetween(0, 255),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    #[\Override]
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(EVs $eVs): void {})
        ;
    }
}
