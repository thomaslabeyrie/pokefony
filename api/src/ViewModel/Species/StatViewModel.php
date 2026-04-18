<?php

namespace App\ViewModel\Species;

readonly class StatViewModel
{
    public function __construct(
        public string $name,
        public int $baseValue,
    ) {
    }
}
