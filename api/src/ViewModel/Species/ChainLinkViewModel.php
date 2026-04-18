<?php

namespace App\ViewModel\Species;

use App\ViewModel\Common\SpriteViewModel;

readonly class ChainLinkViewModel
{
    public function __construct(
        public string           $name,
        public bool             $isBaby,
        public ?SpriteViewModel $sprite = null,
        /** @var ChainLinkViewModel[] */
        public array            $evolutions = [],
        /** @var EvolutionDetailViewModel[] */
        public array            $details = [],
    )
    {
    }
}
