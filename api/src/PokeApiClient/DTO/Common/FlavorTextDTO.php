<?php

namespace App\PokeApiClient\DTO\Common;

use Symfony\Component\Serializer\Attribute\SerializedName;

class FlavorTextDTO
{
    #[SerializedName('flavor_text')]
    public string $flavorText;

    public NamedResourceDTO $language;

    public NamedResourceDTO $version;
}
