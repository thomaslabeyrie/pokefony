<?php

namespace App\PokeApiClient\DTO\Pokemon;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use App\PokeApiClient\DTO\PokeApiEndpointDtoInterface;
use App\PokeApiClient\DTO\Pokemon\Sprites\PokemonSpritesDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonDTO implements PokeApiEndpointDtoInterface
{
    public int $id;

    public string $name;

    #[SerializedName('base_experience')]
    public int $baseExperience;

    public int $height;

    public int $weight;

    /** @var PokemonAbilityDTO[] */
    public array $abilities;

    /** @var NamedResourceDTO[] */
    public array $forms;

    public NamedResourceDTO $species;

    public PokemonSpritesDTO $sprites;

    public PokemonCriesDTO $cries;

    /** @var PokemonStatDTO[] */
    public array $stats;

    /** @var PokemonTypeDTO[] */
    public array $types;

    public static function getEndpoint(): string
    {
        return 'pokemon';
    }
}
