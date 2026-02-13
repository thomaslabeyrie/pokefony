<?php

namespace App\DTO\Pokemon;

class GenerationSpritesDTO
{
    public function __construct(
        public readonly ?string $frontDefault = null,
        public readonly ?string $backDefault = null,
        public readonly ?string $frontFemale = null,
        public readonly ?string $backFemale = null,
        public readonly ?string $frontShiny = null,
        public readonly ?string $backShiny = null,
        public readonly ?string $frontShinyFemale = null,
        public readonly ?string $backShinyFemale = null,
        // Nouveaux champs pour les sprites animés
        public readonly ?AnimatedSpritesDTO $animated = null,
    ) {
    }
}
