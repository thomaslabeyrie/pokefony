<?php

namespace App\ViewModel\Species;

use App\Service\AbilityViewModel;

readonly class SpeciesViewModel
{
    public function __construct(
        public int $id,

        public string $name,

        /** @var string[] */
        public array $types,

        public float $height,

        public float $weight,

        public int $genderRate,

        public string $growthRate,

        public int $baseExperience,

        public int $captureRate,

        public int $baseHappiness,

        public string $spriteUrl,

        public PokemonDamageRelationsViewModel $damageRelations,

        public string $flavorText,

        public string $genus,

        /** @var string[] */
        public array $eggGroups,

        /** @var StatViewModel[] */
        public array $stats,

        /** @var AbilityViewModel[] */
        public array $abilities,

        public ?ChainLinkViewModel $evolutionChain = null,
    ) {}
}
