<?php

namespace App\ViewModel\Species;

readonly class PokemonDamageRelationsViewModel
{
    public function __construct(
        /** @var string[] */
        public array $immuneTo = [],
        /** @var string[] */
        public array $veryResistantTo = [],
        /** @var string[] */
        public array $resistantTo = [],
        /** @var string[] */
        public array $neutralTo = [],
        /** @var string[] */
        public array $weakTo = [],
        /** @var string[] */
        public array $veryWeakTo = [],
    ) {
    }
}
