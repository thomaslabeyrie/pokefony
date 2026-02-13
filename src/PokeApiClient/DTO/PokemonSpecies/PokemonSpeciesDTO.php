<?php

namespace App\PokeApiClient\DTO\PokemonSpecies;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use App\PokeApiClient\DTO\Common\ResourceDTO;
use App\PokeApiClient\DTO\Common\FlavorTextDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonSpeciesDTO
{
    public int $id;

    public string $name;

    public int $order;

    #[SerializedName('gender_rate')]
    public int $genderRate;

    #[SerializedName('capture_rate')]
    public int $captureRate;

    #[SerializedName('base_happiness')]
    public int $baseHappiness;

    #[SerializedName('is_baby')]
    public bool $isBaby;

    #[SerializedName('is_legendary')]
    public bool $isLegendary;

    #[SerializedName('is_mythical')]
    public bool $isMythical;

    #[SerializedName('hatch_counter')]
    public int $hatchCounter;

    #[SerializedName('has_gender_differences')]
    public bool $hasGenderDifferences;

    #[SerializedName('forms_switchable')]
    public bool $formsSwitchable;

    #[SerializedName('growth_rate')]
    public NamedResourceDTO $growthRate;

    /** @var PokemonSpeciesDexEntryDTO[] */
    #[SerializedName('pokedex_numbers')]
    public array $pokedexNumbers = [];

    /** @var NamedResourceDTO[] */
    #[SerializedName('egg_groups')]
    public array $eggGroups = [];

    public NamedResourceDTO $color;

    public NamedResourceDTO $shape;

    #[SerializedName('evolves_from_species')]
    public ?NamedResourceDTO $evolvesFromSpecies = null;

    #[SerializedName('evolution_chain')]
    public ResourceDTO $evolutionChain;

    public ?NamedResourceDTO $habitat = null;

    public NamedResourceDTO $generation;

    /** @var FlavorTextDTO[] */
    #[SerializedName('flavor_text_entries')]
    public array $flavorTextEntries = [];
}
