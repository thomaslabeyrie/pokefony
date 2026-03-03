<?php

namespace App\Factory\Embeddable;

use App\Entity\Embeddable\IVs;
use Zenstruck\Foundry\ObjectFactory;

/**
 * @extends ObjectFactory<IVs>
 */
final class IVsFactory extends ObjectFactory
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
        return IVs::class;
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
            'atk' => self::faker()->numberBetween(0, 31),
            'def' => self::faker()->numberBetween(0, 31),
            'hp' => self::faker()->numberBetween(0, 31),
            'spAtk' => self::faker()->numberBetween(0, 31),
            'spDef' => self::faker()->numberBetween(0, 31),
            'speed' => self::faker()->numberBetween(0, 31),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    #[\Override]
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(IVs $iVs): void {})
        ;
    }
}
