<?php

namespace App\PokeApiClient\DTO\Pokemon\Sprites\SpritesVersions;

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
