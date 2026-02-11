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
    /**
     * @return EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemGender|null
     */
    public function getGender(): ?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemGender
    {
        return $this->gender;
    }
    /**
     * @param EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemGender|null $gender
     *
     * @return self
     */
    public function setGender(?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemGender $gender): self
    {
        $this->initialized['gender'] = true;
        $this->gender = $gender;
        return $this;
    }
    /**
     * @return EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemHeldItem|null
     */
    public function getHeldItem(): ?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemHeldItem
    {
        return $this->heldItem;
    }
    /**
     * @param EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemHeldItem|null $heldItem
     *
     * @return self
     */
    public function setHeldItem(?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemHeldItem $heldItem): self
    {
        $this->initialized['heldItem'] = true;
        $this->heldItem = $heldItem;
        return $this;
    }
    /**
     * @return EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemItem|null
     */
    public function getItem(): ?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemItem
    {
        return $this->item;
    }
    /**
     * @param EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemItem|null $item
     *
     * @return self
     */
    public function setItem(?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemItem $item): self
    {
        $this->initialized['item'] = true;
        $this->item = $item;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getKnownMove()
    {
        return $this->knownMove;
    }
    /**
     * @param mixed $knownMove
     *
     * @return self
     */
    public function setKnownMove($knownMove): self
    {
        $this->initialized['knownMove'] = true;
        $this->knownMove = $knownMove;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getKnownMoveType()
    {
        return $this->knownMoveType;
    }
    /**
     * @param mixed $knownMoveType
     *
     * @return self
     */
    public function setKnownMoveType($knownMoveType): self
    {
        $this->initialized['knownMoveType'] = true;
        $this->knownMoveType = $knownMoveType;
        return $this;
    }
    /**
     * @return EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemLocation|null
     */
    public function getLocation(): ?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemLocation
    {
        return $this->location;
    }
    /**
     * @param EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemLocation|null $location
     *
     * @return self
     */
    public function setLocation(?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemLocation $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getMinAffection(): ?int
    {
        return $this->minAffection;
    }
    /**
     * @param int|null $minAffection
     *
     * @return self
     */
    public function setMinAffection(?int $minAffection): self
    {
        $this->initialized['minAffection'] = true;
        $this->minAffection = $minAffection;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getMinBeauty(): ?int
    {
        return $this->minBeauty;
    }
    /**
     * @param int|null $minBeauty
     *
     * @return self
     */
    public function setMinBeauty(?int $minBeauty): self
    {
        $this->initialized['minBeauty'] = true;
        $this->minBeauty = $minBeauty;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getMinDamageTaken(): ?int
    {
        return $this->minDamageTaken;
    }
    /**
     * @param int|null $minDamageTaken
     *
     * @return self
     */
    public function setMinDamageTaken(?int $minDamageTaken): self
    {
        $this->initialized['minDamageTaken'] = true;
        $this->minDamageTaken = $minDamageTaken;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getMinHappiness(): ?int
    {
        return $this->minHappiness;
    }
    /**
     * @param int|null $minHappiness
     *
     * @return self
     */
    public function setMinHappiness(?int $minHappiness): self
    {
        $this->initialized['minHappiness'] = true;
        $this->minHappiness = $minHappiness;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getMinLevel(): ?int
    {
        return $this->minLevel;
    }
    /**
     * @param int|null $minLevel
     *
     * @return self
     */
    public function setMinLevel(?int $minLevel): self
    {
        $this->initialized['minLevel'] = true;
        $this->minLevel = $minLevel;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getMinMoveCount(): ?int
    {
        return $this->minMoveCount;
    }
    /**
     * @param int|null $minMoveCount
     *
     * @return self
     */
    public function setMinMoveCount(?int $minMoveCount): self
    {
        $this->initialized['minMoveCount'] = true;
        $this->minMoveCount = $minMoveCount;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getMinSteps(): ?int
    {
        return $this->minSteps;
    }
    /**
     * @param int|null $minSteps
     *
     * @return self
     */
    public function setMinSteps(?int $minSteps): self
    {
        $this->initialized['minSteps'] = true;
        $this->minSteps = $minSteps;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getNeedsMultiplayer(): ?bool
    {
        return $this->needsMultiplayer;
    }
    /**
     * @param bool|null $needsMultiplayer
     *
     * @return self
     */
    public function setNeedsMultiplayer(?bool $needsMultiplayer): self
    {
        $this->initialized['needsMultiplayer'] = true;
        $this->needsMultiplayer = $needsMultiplayer;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getNeedsOverworldRain(): ?bool
    {
        return $this->needsOverworldRain;
    }
    /**
     * @param bool|null $needsOverworldRain
     *
     * @return self
     */
    public function setNeedsOverworldRain(?bool $needsOverworldRain): self
    {
        $this->initialized['needsOverworldRain'] = true;
        $this->needsOverworldRain = $needsOverworldRain;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getPartySpecies(): ?string
    {
        return $this->partySpecies;
    }
    /**
     * @param string|null $partySpecies
     *
     * @return self
     */
    public function setPartySpecies(?string $partySpecies): self
    {
        $this->initialized['partySpecies'] = true;
        $this->partySpecies = $partySpecies;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getPartyType(): ?string
    {
        return $this->partyType;
    }
    /**
     * @param string|null $partyType
     *
     * @return self
     */
    public function setPartyType(?string $partyType): self
    {
        $this->initialized['partyType'] = true;
        $this->partyType = $partyType;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getRelativePhysicalStats(): ?string
    {
        return $this->relativePhysicalStats;
    }
    /**
     * @param string|null $relativePhysicalStats
     *
     * @return self
     */
    public function setRelativePhysicalStats(?string $relativePhysicalStats): self
    {
        $this->initialized['relativePhysicalStats'] = true;
        $this->relativePhysicalStats = $relativePhysicalStats;
        return $this;
    }
    /**
     * @return string
     */
    public function getTimeOfDay(): string
    {
        return $this->timeOfDay;
    }
    /**
     * @param string $timeOfDay
     *
     * @return self
     */
    public function setTimeOfDay(string $timeOfDay): self
    {
        $this->initialized['timeOfDay'] = true;
        $this->timeOfDay = $timeOfDay;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getTradeSpecies(): ?string
    {
        return $this->tradeSpecies;
    }
    /**
     * @param string|null $tradeSpecies
     *
     * @return self
     */
    public function setTradeSpecies(?string $tradeSpecies): self
    {
        $this->initialized['tradeSpecies'] = true;
        $this->tradeSpecies = $tradeSpecies;
        return $this;
    }
    /**
     * @return EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemTrigger
     */
    public function getTrigger(): EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemTrigger
    {
        return $this->trigger;
    }
    /**
     * @param EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemTrigger $trigger
     *
     * @return self
     */
    public function setTrigger(EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemTrigger $trigger): self
    {
        $this->initialized['trigger'] = true;
        $this->trigger = $trigger;
        return $this;
    }
    /**
     * @return bool
     */
    public function getTurnUpsideDown(): bool
    {
        return $this->turnUpsideDown;
    }
    /**
     * @param bool $turnUpsideDown
     *
     * @return self
     */
    public function setTurnUpsideDown(bool $turnUpsideDown): self
    {
        $this->initialized['turnUpsideDown'] = true;
        $this->turnUpsideDown = $turnUpsideDown;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getUsedMove()
    {
        return $this->usedMove;
    }
    /**
     * @param mixed $usedMove
     *
     * @return self
     */
    public function setUsedMove($usedMove): self
    {
        $this->initialized['usedMove'] = true;
        $this->usedMove = $usedMove;
        return $this;
    }
    /**
     * @return EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemRegionId|null
     */
    public function getRegionId(): ?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemRegionId
    {
        return $this->regionId;
    }
    /**
     * @param EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemRegionId|null $regionId
     *
     * @return self
     */
    public function setRegionId(?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemRegionId $regionId): self
    {
        $this->initialized['regionId'] = true;
        $this->regionId = $regionId;
        return $this;
    }
    /**
     * @return EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemBaseFormId|null
     */
    public function getBaseFormId(): ?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemBaseFormId
    {
        return $this->baseFormId;
    }
    /**
     * @param EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemBaseFormId|null $baseFormId
     *
     * @return self
     */
    public function setBaseFormId(?EvolutionChainDetailChainEvolvesToItemEvolutionDetailsItemBaseFormId $baseFormId): self
    {
        $this->initialized['baseFormId'] = true;
        $this->baseFormId = $baseFormId;
        return $this;
    }
}