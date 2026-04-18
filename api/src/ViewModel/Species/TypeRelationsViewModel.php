<?php

namespace App\ViewModel\Species;

readonly class TypeRelationsViewModel
{
    public function __construct(
        public array $noDamageFrom,
        public array $halfDamageFrom,
        public array $doubleDamageFrom,
    ) {
    }
}
