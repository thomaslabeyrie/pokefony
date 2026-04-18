<?php

namespace App\PokeApiClient\DTO\Ability;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class AbilityFlavorText
{
    #[SerializedName('flavor_text')]
    public string $flavorText;

    public NamedResourceDTO $language;

    #[SerializedName('version_group')]
    public NamedResourceDTO $versionGroup;
}
