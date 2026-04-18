<?php

namespace App\PokeApiClient\DTO\Pokemon\Sprites\SpritesVersions;

use Symfony\Component\Serializer\Attribute\SerializedName;

class SpritesVersions
{
    #[SerializedName('generation-i')]
    public GenerationI $generationI;

    #[SerializedName('generation-ii')]
    public GenerationII $generationII;

    #[SerializedName('generation-iii')]
    public GenerationIII $generationIII;

    #[SerializedName('generation-iv')]
    public GenerationIV $generationIV;

    #[SerializedName('generation-v')]
    public GenerationV $generationV;

    #[SerializedName('generation-vi')]
    public GenerationVI $generationVI;

    #[SerializedName('generation-vii')]
    public GenerationVII $generationVII;

    #[SerializedName('generation-viii')]
    public GenerationVIII $generationVIII;
}
