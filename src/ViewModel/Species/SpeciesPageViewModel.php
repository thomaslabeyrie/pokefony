<?php

namespace App\ViewModel\Species;

use App\Service\AbilityViewModel;
use App\ViewModel\Common\SpriteViewModel;

readonly class SpeciesPageViewModel
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
        public SpriteViewModel $sprite,
        public PokemonDamageRelationsViewModel $damageRelations,
        public FlavorTextViewModel $flavorText,
        /** @var StatViewModel[] */
        public array $stats,
        /** @var AbilityViewModel[] */
        public array $abilities,
        public ?ChainLinkViewModel $evolutionChain = null,
    ) {
    }
}
