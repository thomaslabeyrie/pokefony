<?php

namespace App\Generated\PokeApi\Model;

class EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemGender|null
     */
    protected $gender;
    /**
     * @var EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemHeldItem|null
     */
    protected $heldItem;
    /**
     * @var EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemItem|null
     */
    protected $item;
    /**
     * @var mixed|null
     */
    protected $knownMove;
    /**
     * @var mixed|null
     */
    protected $knownMoveType;
    /**
     * @var EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemLocation|null
     */
    protected $location;
    /**
     * @var int|null
     */
    protected $minAffection;
    /**
     * @var int|null
     */
    protected $minBeauty;
    /**
     * @var int|null
     */
    protected $minDamageTaken;
    /**
     * @var int|null
     */
    protected $minHappiness;
    /**
     * @var int|null
     */
    protected $minLevel;
    /**
     * @var int|null
     */
    protected $minMoveCount;
    /**
     * @var int|null
     */
    protected $minSteps;
    /**
     * @var bool|null
     */
    protected $needsMultiplayer;
    /**
     * @var bool|null
     */
    protected $needsOverworldRain;
    /**
     * @var string|null
     */
    protected $partySpecies;
    /**
     * @var string|null
     */
    protected $partyType;
    /**
     * @var string|null
     */
    protected $relativePhysicalStats;
    /**
     * @var string
     */
    protected $timeOfDay;
    /**
     * @var string|null
     */
    protected $tradeSpecies;
    /**
     * @var EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemTrigger
     */
    protected $trigger;
    /**
     * @var bool
     */
    protected $turnUpsideDown;
    /**
     * @var mixed|null
     */
    protected $usedMove;
    /**
     * @var EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemRegionId|null
     */
    protected $regionId;
    /**
     * @var EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemBaseFormId|null
     */
    protected $baseFormId;

    public function getGender(): ?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemGender
    {
        return $this->gender;
    }

    public function setGender(?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemGender $gender): self
    {
        $this->initialized['gender'] = true;
        $this->gender = $gender;

        return $this;
    }

    public function getHeldItem(): ?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemHeldItem
    {
        return $this->heldItem;
    }

    public function setHeldItem(?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemHeldItem $heldItem): self
    {
        $this->initialized['heldItem'] = true;
        $this->heldItem = $heldItem;

        return $this;
    }

    public function getItem(): ?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemItem
    {
        return $this->item;
    }

    public function setItem(?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemItem $item): self
    {
        $this->initialized['item'] = true;
        $this->item = $item;

        return $this;
    }

    public function getKnownMove()
    {
        return $this->knownMove;
    }

    public function setKnownMove($knownMove): self
    {
        $this->initialized['knownMove'] = true;
        $this->knownMove = $knownMove;

        return $this;
    }

    public function getKnownMoveType()
    {
        return $this->knownMoveType;
    }

    public function setKnownMoveType($knownMoveType): self
    {
        $this->initialized['knownMoveType'] = true;
        $this->knownMoveType = $knownMoveType;

        return $this;
    }

    public function getLocation(): ?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemLocation
    {
        return $this->location;
    }

    public function setLocation(?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemLocation $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;

        return $this;
    }

    public function getMinAffection(): ?int
    {
        return $this->minAffection;
    }

    public function setMinAffection(?int $minAffection): self
    {
        $this->initialized['minAffection'] = true;
        $this->minAffection = $minAffection;

        return $this;
    }

    public function getMinBeauty(): ?int
    {
        return $this->minBeauty;
    }

    public function setMinBeauty(?int $minBeauty): self
    {
        $this->initialized['minBeauty'] = true;
        $this->minBeauty = $minBeauty;

        return $this;
    }

    public function getMinDamageTaken(): ?int
    {
        return $this->minDamageTaken;
    }

    public function setMinDamageTaken(?int $minDamageTaken): self
    {
        $this->initialized['minDamageTaken'] = true;
        $this->minDamageTaken = $minDamageTaken;

        return $this;
    }

    public function getMinHappiness(): ?int
    {
        return $this->minHappiness;
    }

    public function setMinHappiness(?int $minHappiness): self
    {
        $this->initialized['minHappiness'] = true;
        $this->minHappiness = $minHappiness;

        return $this;
    }

    public function getMinLevel(): ?int
    {
        return $this->minLevel;
    }

    public function setMinLevel(?int $minLevel): self
    {
        $this->initialized['minLevel'] = true;
        $this->minLevel = $minLevel;

        return $this;
    }

    public function getMinMoveCount(): ?int
    {
        return $this->minMoveCount;
    }

    public function setMinMoveCount(?int $minMoveCount): self
    {
        $this->initialized['minMoveCount'] = true;
        $this->minMoveCount = $minMoveCount;

        return $this;
    }

    public function getMinSteps(): ?int
    {
        return $this->minSteps;
    }

    public function setMinSteps(?int $minSteps): self
    {
        $this->initialized['minSteps'] = true;
        $this->minSteps = $minSteps;

        return $this;
    }

    public function getNeedsMultiplayer(): ?bool
    {
        return $this->needsMultiplayer;
    }

    public function setNeedsMultiplayer(?bool $needsMultiplayer): self
    {
        $this->initialized['needsMultiplayer'] = true;
        $this->needsMultiplayer = $needsMultiplayer;

        return $this;
    }

    public function getNeedsOverworldRain(): ?bool
    {
        return $this->needsOverworldRain;
    }

    public function setNeedsOverworldRain(?bool $needsOverworldRain): self
    {
        $this->initialized['needsOverworldRain'] = true;
        $this->needsOverworldRain = $needsOverworldRain;

        return $this;
    }

    public function getPartySpecies(): ?string
    {
        return $this->partySpecies;
    }

    public function setPartySpecies(?string $partySpecies): self
    {
        $this->initialized['partySpecies'] = true;
        $this->partySpecies = $partySpecies;

        return $this;
    }

    public function getPartyType(): ?string
    {
        return $this->partyType;
    }

    public function setPartyType(?string $partyType): self
    {
        $this->initialized['partyType'] = true;
        $this->partyType = $partyType;

        return $this;
    }

    public function getRelativePhysicalStats(): ?string
    {
        return $this->relativePhysicalStats;
    }

    public function setRelativePhysicalStats(?string $relativePhysicalStats): self
    {
        $this->initialized['relativePhysicalStats'] = true;
        $this->relativePhysicalStats = $relativePhysicalStats;

        return $this;
    }

    public function getTimeOfDay(): string
    {
        return $this->timeOfDay;
    }

    public function setTimeOfDay(string $timeOfDay): self
    {
        $this->initialized['timeOfDay'] = true;
        $this->timeOfDay = $timeOfDay;

        return $this;
    }

    public function getTradeSpecies(): ?string
    {
        return $this->tradeSpecies;
    }

    public function setTradeSpecies(?string $tradeSpecies): self
    {
        $this->initialized['tradeSpecies'] = true;
        $this->tradeSpecies = $tradeSpecies;

        return $this;
    }

    public function getTrigger(): EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemTrigger
    {
        return $this->trigger;
    }

    public function setTrigger(EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemTrigger $trigger): self
    {
        $this->initialized['trigger'] = true;
        $this->trigger = $trigger;

        return $this;
    }

    public function getTurnUpsideDown(): bool
    {
        return $this->turnUpsideDown;
    }

    public function setTurnUpsideDown(bool $turnUpsideDown): self
    {
        $this->initialized['turnUpsideDown'] = true;
        $this->turnUpsideDown = $turnUpsideDown;

        return $this;
    }

    public function getUsedMove()
    {
        return $this->usedMove;
    }

    public function setUsedMove($usedMove): self
    {
        $this->initialized['usedMove'] = true;
        $this->usedMove = $usedMove;

        return $this;
    }

    public function getRegionId(): ?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemRegionId
    {
        return $this->regionId;
    }

    public function setRegionId(?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemRegionId $regionId): self
    {
        $this->initialized['regionId'] = true;
        $this->regionId = $regionId;

        return $this;
    }

    public function getBaseFormId(): ?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemBaseFormId
    {
        return $this->baseFormId;
    }

    public function setBaseFormId(?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemBaseFormId $baseFormId): self
    {
        $this->initialized['baseFormId'] = true;
        $this->baseFormId = $baseFormId;

        return $this;
    }
}
