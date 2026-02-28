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
            'atkEv' => self::faker()->numberBetween(0, 255),
            'defEv' => self::faker()->numberBetween(0, 255),
            'hpEv' => self::faker()->numberBetween(0, 255),
            'spAtkEv' => self::faker()->numberBetween(0, 255),
            'spDefEv' => self::faker()->numberBetween(0, 255),
            'speedEv' => self::faker()->numberBetween(0, 255),
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
