<?php

namespace App\ViewModel\Species;

use App\ViewModel\Common\SpriteViewModel;

readonly class EggGroupViewModel
{
    public function __construct(
        public string $name,
    )
    {
    }
}
