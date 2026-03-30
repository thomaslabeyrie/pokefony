<?php

namespace App\ViewModel\Species;

readonly class EvolutionDetailViewModel
{
    public function __construct(
        public string $trigger,
        public ?string $item = null,
        public ?int $gender = null,
        public ?string $heldItem = null,
        public ?string $knownMove = null,
        public ?string $knownMoveType = null,
        public ?string $location = null,
        public ?int $minLevel = null,
        public ?int $minHappiness = null,
        public ?int $minBeauty = null,
        public ?int $minAffection = null,
        public bool $needsMultiplayer = false,
        public bool $needsOverworldRain = false,
        public ?string $partySpecies = null,
        public ?string $partyType = null,
        public ?int $relativePhysicalStats = null,
        public string $timeOfDay = '',
        public ?string $tradeSpecies = null,
        public bool $turnUpsideDown = false,
        public ?string $region = null,
        public ?string $baseForm = null,
        public ?string $usedMove = null,
        public ?int $minMoveCount = null,
        public ?int $minSteps = null,
        public ?int $minDamageTaken = null,
    ) {
    }
}
