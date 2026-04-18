<?php

namespace App\PokeApiClient\DTO\Pokedex;

use App\PokeApiClient\DTO\Common\DescriptionDTO;
use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use App\PokeApiClient\DTO\Common\NameDTO;
use App\PokeApiClient\DTO\PokeApiEndpointDtoInterface;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokedexDTO implements PokeApiEndpointDtoInterface
{
    public int $id;

    public string $name;

    #[SerializedName('is_main_series')]
    public bool $isMainSeries;

    /** @var DescriptionDTO[] */
    public array $descriptions;

    /** @var NameDTO[] */
    public array $names;

    /** @var PokemonEntryDTO[] */
    #[SerializedName('pokemon_entries')]
    public array $pokemonEntries;

    public NamedResourceDTO $region;

    /** @var NamedResourceDTO[] */
    #[SerializedName('version_groups')]
    public array $versionGroups;

    public static function getEndpoint(): string
    {
        return 'pokedex';
    }
}
