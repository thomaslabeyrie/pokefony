<?php

namespace App\PokeApiClient\DTO\Evolution;

use App\PokeApiClient\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class EvolutionDetailDTO
{
    public ?NamedResourceDTO $item = null;

    public NamedResourceDTO $trigger;

    public ?int $gender = null;

    #[SerializedName('held_item')]
    public ?NamedResourceDTO $heldItem = null;

    #[SerializedName('known_move')]
    public ?NamedResourceDTO $knownMove = null;

    #[SerializedName('known_move_type')]
    public ?NamedResourceDTO $knownMoveType = null;

    public ?NamedResourceDTO $location = null;

    #[SerializedName('min_level')]
    public ?int $minLevel = null;

    #[SerializedName('min_happiness')]
    public ?int $minHappiness = null;

    #[SerializedName('min_beauty')]
    public ?int $minBeauty = null;

    #[SerializedName('min_affection')]
    public ?int $minAffection = null;

    #[SerializedName('needs_multiplayer')]
    public bool $needsMultiplayer = false;

    #[SerializedName('needs_overworld_rain')]
    public bool $needsOverworldRain = false;

    #[SerializedName('party_species')]
    public ?NamedResourceDTO $partySpecies = null;

    #[SerializedName('party_type')]
    public ?NamedResourceDTO $partyType = null;

    #[SerializedName('relative_physical_stats')]
    public ?int $relativePhysicalStats = null;

    #[SerializedName('time_of_day')]
    public string $timeOfDay = '';

    #[SerializedName('trade_species')]
    public ?NamedResourceDTO $tradeSpecies = null;

    #[SerializedName('turn_upside_down')]
    public bool $turnUpsideDown = false;

    public ?NamedResourceDTO $region = null;

    #[SerializedName('base_form')]
    public ?NamedResourceDTO $baseForm = null;

    #[SerializedName('used_move')]
    public ?NamedResourceDTO $usedMove = null;

    #[SerializedName('min_move_count')]
    public ?int $minMoveCount = null;

    #[SerializedName('min_steps')]
    public ?int $minSteps = null;

    #[SerializedName('min_damage_taken')]
    public ?int $minDamageTaken = null;
}
