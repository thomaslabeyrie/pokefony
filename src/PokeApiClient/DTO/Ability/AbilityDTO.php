<?php

namespace App\PokeApiClient\DTO\Ability;

use App\PokeApiClient\DTO\PokeApiEndpointDtoInterface;
use Symfony\Component\Serializer\Attribute\SerializedName;

class AbilityDTO implements PokeApiEndpointDtoInterface
{
    public int $id;

    public string $name;

    #[SerializedName('flavor_text_entries')]
    /** @var AbilityFlavorText[] */
    public array $flavorTextEntries;

    public static function getEndpoint(): string
    {
        return 'ability';
    }
}
