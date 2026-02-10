<?php

namespace App\DTO;

use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class FlavorTextDTO
{
    #[SerializedName('flavor_text')]
    public string $flavorText;

    public NamedResourceDTO $language;

    public NamedResourceDTO $version;
}
