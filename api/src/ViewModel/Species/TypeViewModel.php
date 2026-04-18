<?php

namespace App\ViewModel\Species;

readonly class TypeViewModel
{
    public function __construct(
        public string $name,
        public TypeRelationsViewModel $damageRelations,
    ) {
    }
}
