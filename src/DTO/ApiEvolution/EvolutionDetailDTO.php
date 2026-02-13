<?php

namespace App\DTO\ApiEvolution;

use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class EvolutionDetailDTO
{
    private ?NamedResourceDTO $item = null;

    private NamedResourceDTO $trigger;

    private ?int $gender = null;

    #[SerializedName('held_item')]
    private ?NamedResourceDTO $heldItem = null;

    #[SerializedName('known_move')]
    private ?NamedResourceDTO $knownMove = null;

    #[SerializedName('known_move_type')]
    private ?NamedResourceDTO $knownMoveType = null;

    private ?NamedResourceDTO $location = null;

    #[SerializedName('min_level')]
    private ?int $minLevel = null;

    #[SerializedName('min_happiness')]
    private ?int $minHappiness = null;

    #[SerializedName('min_beauty')]
    private ?int $minBeauty = null;

    #[SerializedName('min_affection')]
    private ?int $minAffection = null;

    #[SerializedName('needs_multiplayer')]
    private bool $needsMultiplayer = false;

    #[SerializedName('needs_overworld_rain')]
    private bool $needsOverworldRain = false;

    #[SerializedName('party_species')]
    private ?NamedResourceDTO $partySpecies = null;

    #[SerializedName('party_type')]
    private ?NamedResourceDTO $partyType = null;

    #[SerializedName('relative_physical_stats')]
    private ?int $relativePhysicalStats = null;

    #[SerializedName('time_of_day')]
    private string $timeOfDay = '';

    #[SerializedName('trade_species')]
    private ?NamedResourceDTO $tradeSpecies = null;

    #[SerializedName('turn_upside_down')]
    private bool $turnUpsideDown = false;

    private ?NamedResourceDTO $region = null;

    #[SerializedName('base_form')]
    private ?NamedResourceDTO $baseForm = null;

    #[SerializedName('used_move')]
    private ?NamedResourceDTO $usedMove = null;

    #[SerializedName('min_move_count')]
    private ?int $minMoveCount = null;

    #[SerializedName('min_steps')]
    private ?int $minSteps = null;

    #[SerializedName('min_damage_taken')]
    private ?int $minDamageTaken = null;

    public function getItem(): ?NamedResourceDTO
    {
        return $this->item;
    }

    public function setItem(?NamedResourceDTO $item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getTrigger(): NamedResourceDTO
    {
        return $this->trigger;
    }

    public function setTrigger(NamedResourceDTO $trigger): self
    {
        $this->trigger = $trigger;

        return $this;
    }

    public function getGender(): ?int
    {
        return $this->gender;
    }

    public function setGender(?int $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getHeldItem(): ?NamedResourceDTO
    {
        return $this->heldItem;
    }

    public function setHeldItem(?NamedResourceDTO $heldItem): self
    {
        $this->heldItem = $heldItem;

        return $this;
    }

    public function getKnownMove(): ?NamedResourceDTO
    {
        return $this->knownMove;
    }

    public function setKnownMove(?NamedResourceDTO $knownMove): self
    {
        $this->knownMove = $knownMove;

        return $this;
    }

    public function getKnownMoveType(): ?NamedResourceDTO
    {
        return $this->knownMoveType;
    }

    public function setKnownMoveType(?NamedResourceDTO $knownMoveType): self
    {
        $this->knownMoveType = $knownMoveType;

        return $this;
    }

    public function getLocation(): ?NamedResourceDTO
    {
        return $this->location;
    }

    public function setLocation(?NamedResourceDTO $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getMinLevel(): ?int
    {
        return $this->minLevel;
    }

    public function setMinLevel(?int $minLevel): self
    {
        $this->minLevel = $minLevel;

        return $this;
    }

    public function getMinHappiness(): ?int
    {
        return $this->minHappiness;
    }

    public function setMinHappiness(?int $minHappiness): self
    {
        $this->minHappiness = $minHappiness;

        return $this;
    }

    public function getMinBeauty(): ?int
    {
        return $this->minBeauty;
    }

    public function setMinBeauty(?int $minBeauty): self
    {
        $this->minBeauty = $minBeauty;

        return $this;
    }

    public function getMinAffection(): ?int
    {
        return $this->minAffection;
    }

    public function setMinAffection(?int $minAffection): self
    {
        $this->minAffection = $minAffection;

        return $this;
    }

    public function needsMultiplayer(): bool
    {
        return $this->needsMultiplayer;
    }

    public function setNeedsMultiplayer(bool $needsMultiplayer): self
    {
        $this->needsMultiplayer = $needsMultiplayer;

        return $this;
    }

    public function needsOverworldRain(): bool
    {
        return $this->needsOverworldRain;
    }

    public function setNeedsOverworldRain(bool $needsOverworldRain): self
    {
        $this->needsOverworldRain = $needsOverworldRain;

        return $this;
    }

    public function getPartySpecies(): ?NamedResourceDTO
    {
        return $this->partySpecies;
    }

    public function setPartySpecies(?NamedResourceDTO $partySpecies): self
    {
        $this->partySpecies = $partySpecies;

        return $this;
    }

    public function getPartyType(): ?NamedResourceDTO
    {
        return $this->partyType;
    }

    public function setPartyType(?NamedResourceDTO $partyType): self
    {
        $this->partyType = $partyType;

        return $this;
    }

    public function getRelativePhysicalStats(): ?int
    {
        return $this->relativePhysicalStats;
    }

    public function setRelativePhysicalStats(?int $relativePhysicalStats): self
    {
        $this->relativePhysicalStats = $relativePhysicalStats;

        return $this;
    }

    public function getTimeOfDay(): string
    {
        return $this->timeOfDay;
    }

    public function setTimeOfDay(string $timeOfDay): self
    {
        $this->timeOfDay = $timeOfDay;

        return $this;
    }

    public function getTradeSpecies(): ?NamedResourceDTO
    {
        return $this->tradeSpecies;
    }

    public function setTradeSpecies(?NamedResourceDTO $tradeSpecies): self
    {
        $this->tradeSpecies = $tradeSpecies;

        return $this;
    }

    public function isTurnUpsideDown(): bool
    {
        return $this->turnUpsideDown;
    }

    public function setTurnUpsideDown(bool $turnUpsideDown): self
    {
        $this->turnUpsideDown = $turnUpsideDown;

        return $this;
    }

    public function getRegion(): ?NamedResourceDTO
    {
        return $this->region;
    }

    public function setRegion(?NamedResourceDTO $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getBaseForm(): ?NamedResourceDTO
    {
        return $this->baseForm;
    }

    public function setBaseForm(?NamedResourceDTO $baseForm): self
    {
        $this->baseForm = $baseForm;

        return $this;
    }

    public function getUsedMove(): ?NamedResourceDTO
    {
        return $this->usedMove;
    }

    public function setUsedMove(?NamedResourceDTO $usedMove): self
    {
        $this->usedMove = $usedMove;

        return $this;
    }

    public function getMinMoveCount(): ?int
    {
        return $this->minMoveCount;
    }

    public function setMinMoveCount(?int $minMoveCount): self
    {
        $this->minMoveCount = $minMoveCount;

        return $this;
    }

    public function getMinSteps(): ?int
    {
        return $this->minSteps;
    }

    public function setMinSteps(?int $minSteps): self
    {
        $this->minSteps = $minSteps;

        return $this;
    }

    public function getMinDamageTaken(): ?int
    {
        return $this->minDamageTaken;
    }

    public function setMinDamageTaken(?int $minDamageTaken): self
    {
        $this->minDamageTaken = $minDamageTaken;

        return $this;
    }
}
