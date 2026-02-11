<?php

namespace App\Generated\PokeApi\Model;

class NatureDetail extends \ArrayObject
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
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var StatSummary
     */
    protected $decreasedStat;
    /**
     * @var StatSummary
     */
    protected $increasedStat;
    /**
     * @var BerryFlavorSummary
     */
    protected $likesFlavor;
    /**
     * @var BerryFlavorSummary
     */
    protected $hatesFlavor;
    /**
     * @var list<BerrySummary>
     */
    protected $berries;
    /**
     * @var list<NatureDetailPokeathlonStatChangesItem>
     */
    protected $pokeathlonStatChanges;
    /**
     * @var list<NatureBattleStylePreference>
     */
    protected $moveBattleStylePreferences;
    /**
     * @var list<NatureName>
     */
    protected $names;
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return StatSummary
     */
    public function getDecreasedStat(): StatSummary
    {
        return $this->decreasedStat;
    }
    /**
     * @param StatSummary $decreasedStat
     *
     * @return self
     */
    public function setDecreasedStat(StatSummary $decreasedStat): self
    {
        $this->initialized['decreasedStat'] = true;
        $this->decreasedStat = $decreasedStat;
        return $this;
    }
    /**
     * @return StatSummary
     */
    public function getIncreasedStat(): StatSummary
    {
        return $this->increasedStat;
    }
    /**
     * @param StatSummary $increasedStat
     *
     * @return self
     */
    public function setIncreasedStat(StatSummary $increasedStat): self
    {
        $this->initialized['increasedStat'] = true;
        $this->increasedStat = $increasedStat;
        return $this;
    }
    /**
     * @return BerryFlavorSummary
     */
    public function getLikesFlavor(): BerryFlavorSummary
    {
        return $this->likesFlavor;
    }
    /**
     * @param BerryFlavorSummary $likesFlavor
     *
     * @return self
     */
    public function setLikesFlavor(BerryFlavorSummary $likesFlavor): self
    {
        $this->initialized['likesFlavor'] = true;
        $this->likesFlavor = $likesFlavor;
        return $this;
    }
    /**
     * @return BerryFlavorSummary
     */
    public function getHatesFlavor(): BerryFlavorSummary
    {
        return $this->hatesFlavor;
    }
    /**
     * @param BerryFlavorSummary $hatesFlavor
     *
     * @return self
     */
    public function setHatesFlavor(BerryFlavorSummary $hatesFlavor): self
    {
        $this->initialized['hatesFlavor'] = true;
        $this->hatesFlavor = $hatesFlavor;
        return $this;
    }
    /**
     * @return list<BerrySummary>
     */
    public function getBerries(): array
    {
        return $this->berries;
    }
    /**
     * @param list<BerrySummary> $berries
     *
     * @return self
     */
    public function setBerries(array $berries): self
    {
        $this->initialized['berries'] = true;
        $this->berries = $berries;
        return $this;
    }
    /**
     * @return list<NatureDetailPokeathlonStatChangesItem>
     */
    public function getPokeathlonStatChanges(): array
    {
        return $this->pokeathlonStatChanges;
    }
    /**
     * @param list<NatureDetailPokeathlonStatChangesItem> $pokeathlonStatChanges
     *
     * @return self
     */
    public function setPokeathlonStatChanges(array $pokeathlonStatChanges): self
    {
        $this->initialized['pokeathlonStatChanges'] = true;
        $this->pokeathlonStatChanges = $pokeathlonStatChanges;
        return $this;
    }
    /**
     * @return list<NatureBattleStylePreference>
     */
    public function getMoveBattleStylePreferences(): array
    {
        return $this->moveBattleStylePreferences;
    }
    /**
     * @param list<NatureBattleStylePreference> $moveBattleStylePreferences
     *
     * @return self
     */
    public function setMoveBattleStylePreferences(array $moveBattleStylePreferences): self
    {
        $this->initialized['moveBattleStylePreferences'] = true;
        $this->moveBattleStylePreferences = $moveBattleStylePreferences;
        return $this;
    }
    /**
     * @return list<NatureName>
     */
    public function getNames(): array
    {
        return $this->names;
    }
    /**
     * @param list<NatureName> $names
     *
     * @return self
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
}