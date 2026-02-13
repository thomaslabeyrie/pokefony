<?php

namespace App\PokeApiClient\DTO\Pokemon;

use App\PokeApiClient\DTO\Pokemon\Sprites\PokemonSpritesDTO;
use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonDTO
{
    #[Groups(['pokemon', 'pokedex'])]
    public int $id;

    #[Groups(['pokemon', 'pokedex'])]
    public string $name;

    #[Groups(['pokemon'])]
    #[SerializedName('base_experience')]
    public int $baseExperience;

    #[Groups(['pokemon'])]
    public int $height;

    #[Groups(['pokemon'])]
    public int $weight;

    /** @var PokemonAbilityDTO[] */
    #[Groups(['pokemon'])]
    public array $abilities;

    /** @var NamedResourceDTO[] */
    #[Groups(['pokemon'])]
    public array $forms;

    #[Groups(['pokemon'])]
    public NamedResourceDTO $species;

    #[Groups(['pokemon', 'pokedex'])]
    public PokemonSpritesDTO $sprites;

    #[Groups(['pokemon'])]
    public PokemonCriesDTO $cries;

    /** @var PokemonStatDTO[] */
    #[Groups(['pokemon'])]
    public array $stats;

    /** @var PokemonTypeDTO[] */
    #[Groups(['pokemon', 'pokedex'])]
    public array $types;
}
