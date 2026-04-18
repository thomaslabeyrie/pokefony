<?php

namespace App\Service;

readonly class AbilityViewModel
{
    public function __construct(
        public string $name,
        public bool $isHidden,
    ) {
    }
}
