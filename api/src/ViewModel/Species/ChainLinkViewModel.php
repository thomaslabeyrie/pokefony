<?php

namespace App\ViewModel\Species;

readonly class ChainLinkViewModel
{
    public function __construct(
        public string           $name,
        public bool             $isBaby,
        public string           $spriteUrl,
        /** @var ChainLinkViewModel[] */
        public array            $evolutions = [],
        /** @var EvolutionDetailViewModel[] */
        public array            $details = [],
    )
    {
    }
}
