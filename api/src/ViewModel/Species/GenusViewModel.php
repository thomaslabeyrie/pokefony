<?php

namespace App\ViewModel\Species;

readonly class GenusViewModel
{
    public function __construct(
        public string $genus,
        public string $language,
    ) {}
}
