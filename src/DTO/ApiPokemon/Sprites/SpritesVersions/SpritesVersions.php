<?php

namespace App\DTO\ApiPokemon\Sprites\SpritesVersions;

use App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationI\GenerationI;
use App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationII\GenerationII;
use App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationIII\GenerationIII;
use App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationIV\GenerationIV;
use App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationV\GenerationV;
use App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationVI\GenerationVI;
use App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationVII\GenerationVII;
use App\DTO\ApiPokemon\Sprites\SpritesVersions\GenerationVIII\GenerationVIII;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class SpritesVersions
{
    #[Groups(['pokemon'])]
    #[SerializedName('generation-i')]
    public GenerationI $generationI;

    #[Groups(['pokemon'])]
    #[SerializedName('generation-ii')]
    public GenerationII $generationII;

    #[Groups(['pokemon'])]
    #[SerializedName('generation-iii')]
    public GenerationIII $generationIII;

    #[Groups(['pokemon'])]
    #[SerializedName('generation-iv')]
    public GenerationIV $generationIV;

    #[Groups(['pokemon'])]
    #[SerializedName('generation-v')]
    public GenerationV $generationV;

    #[Groups(['pokemon'])]
    #[SerializedName('generation-vi')]
    public GenerationVI $generationVI;

    #[Groups(['pokemon'])]
    #[SerializedName('generation-vii')]
    public GenerationVII $generationVII;

    #[Groups(['pokemon'])]
    #[SerializedName('generation-viii')]
    public GenerationVIII $generationVIII;
}
