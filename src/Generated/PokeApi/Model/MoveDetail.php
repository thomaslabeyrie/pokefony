<?php

namespace App\Generated\PokeApi\Model;

class MoveDetail extends \ArrayObject
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
     * @var int|null
     */
    protected $accuracy;
    /**
     * @var int
     */
    protected $effectChance;
    /**
     * @var int|null
     */
    protected $pp;
    /**
     * @var int|null
     */
    protected $priority;
    /**
     * @var int|null
     */
    protected $power;
    /**
     * @var MoveDetailContestCombos
     */
    protected $contestCombos;
    /**
     * @var ContestTypeSummary
     */
    protected $contestType;
    /**
     * @var ContestEffectSummary
     */
    protected $contestEffect;
    /**
     * @var MoveDamageClassSummary
     */
    protected $damageClass;
    /**
     * @var list<MoveDetailEffectEntriesItem>
     */
    protected $effectEntries;
    /**
     * @var list<MoveDetailEffectChangesItem>
     */
    protected $effectChanges;
    /**
     * @var GenerationSummary
     */
    protected $generation;
    /**
     * @var MoveDetailMeta
     */
    protected $meta;
    /**
     * @var list<MoveName>
     */
    protected $names;
    /**
     * @var list<MoveChange>
     */
    protected $pastValues;
    /**
     * @var list<MoveDetailStatChangesItem>
     */
    protected $statChanges;
    /**
     * @var SuperContestEffectSummary
     */
    protected $superContestEffect;
    /**
     * @var MoveTargetSummary
     */
    protected $target;
    /**
     * @var TypeSummary
     */
    protected $type;
    /**
     * @var list<MoveDetailMachinesItem>
     */
    protected $machines;
    /**
     * @var list<MoveFlavorText>
     */
    protected $flavorTextEntries;
    /**
     * @var list<MoveDetailLearnedByPokemonItem>
     */
    protected $learnedByPokemon;
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
     * @return int|null
     */
    public function getAccuracy(): ?int
    {
        return $this->accuracy;
    }
    /**
     * @param int|null $accuracy
     *
     * @return self
     */
    public function setAccuracy(?int $accuracy): self
    {
        $this->initialized['accuracy'] = true;
        $this->accuracy = $accuracy;
        return $this;
    }
    /**
     * @return int
     */
    public function getEffectChance(): int
    {
        return $this->effectChance;
    }
    /**
     * @param int $effectChance
     *
     * @return self
     */
    public function setEffectChance(int $effectChance): self
    {
        $this->initialized['effectChance'] = true;
        $this->effectChance = $effectChance;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getPp(): ?int
    {
        return $this->pp;
    }
    /**
     * @param int|null $pp
     *
     * @return self
     */
    public function setPp(?int $pp): self
    {
        $this->initialized['pp'] = true;
        $this->pp = $pp;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }
    /**
     * @param int|null $priority
     *
     * @return self
     */
    public function setPriority(?int $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getPower(): ?int
    {
        return $this->power;
    }
    /**
     * @param int|null $power
     *
     * @return self
     */
    public function setPower(?int $power): self
    {
        $this->initialized['power'] = true;
        $this->power = $power;
        return $this;
    }
    /**
     * @return MoveDetailContestCombos
     */
    public function getContestCombos(): MoveDetailContestCombos
    {
        return $this->contestCombos;
    }
    /**
     * @param MoveDetailContestCombos $contestCombos
     *
     * @return self
     */
    public function setContestCombos(MoveDetailContestCombos $contestCombos): self
    {
        $this->initialized['contestCombos'] = true;
        $this->contestCombos = $contestCombos;
        return $this;
    }
    /**
     * @return ContestTypeSummary
     */
    public function getContestType(): ContestTypeSummary
    {
        return $this->contestType;
    }
    /**
     * @param ContestTypeSummary $contestType
     *
     * @return self
     */
    public function setContestType(ContestTypeSummary $contestType): self
    {
        $this->initialized['contestType'] = true;
        $this->contestType = $contestType;
        return $this;
    }
    /**
     * @return ContestEffectSummary
     */
    public function getContestEffect(): ContestEffectSummary
    {
        return $this->contestEffect;
    }
    /**
     * @param ContestEffectSummary $contestEffect
     *
     * @return self
     */
    public function setContestEffect(ContestEffectSummary $contestEffect): self
    {
        $this->initialized['contestEffect'] = true;
        $this->contestEffect = $contestEffect;
        return $this;
    }
    /**
     * @return MoveDamageClassSummary
     */
    public function getDamageClass(): MoveDamageClassSummary
    {
        return $this->damageClass;
    }
    /**
     * @param MoveDamageClassSummary $damageClass
     *
     * @return self
     */
    public function setDamageClass(MoveDamageClassSummary $damageClass): self
    {
        $this->initialized['damageClass'] = true;
        $this->damageClass = $damageClass;
        return $this;
    }
    /**
     * @return list<MoveDetailEffectEntriesItem>
     */
    public function getEffectEntries(): array
    {
        return $this->effectEntries;
    }
    /**
     * @param list<MoveDetailEffectEntriesItem> $effectEntries
     *
     * @return self
     */
    public function setEffectEntries(array $effectEntries): self
    {
        $this->initialized['effectEntries'] = true;
        $this->effectEntries = $effectEntries;
        return $this;
    }
    /**
     * @return list<MoveDetailEffectChangesItem>
     */
    public function getEffectChanges(): array
    {
        return $this->effectChanges;
    }
    /**
     * @param list<MoveDetailEffectChangesItem> $effectChanges
     *
     * @return self
     */
    public function setEffectChanges(array $effectChanges): self
    {
        $this->initialized['effectChanges'] = true;
        $this->effectChanges = $effectChanges;
        return $this;
    }
    /**
     * @return GenerationSummary
     */
    public function getGeneration(): GenerationSummary
    {
        return $this->generation;
    }
    /**
     * @param GenerationSummary $generation
     *
     * @return self
     */
    public function setGeneration(GenerationSummary $generation): self
    {
        $this->initialized['generation'] = true;
        $this->generation = $generation;
        return $this;
    }
    /**
     * @return MoveDetailMeta
     */
    public function getMeta(): MoveDetailMeta
    {
        return $this->meta;
    }
    /**
     * @param MoveDetailMeta $meta
     *
     * @return self
     */
    public function setMeta(MoveDetailMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
    /**
     * @return list<MoveName>
     */
    public function getNames(): array
    {
        return $this->names;
    }
    /**
     * @param list<MoveName> $names
     *
     * @return self
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * @return list<MoveChange>
     */
    public function getPastValues(): array
    {
        return $this->pastValues;
    }
    /**
     * @param list<MoveChange> $pastValues
     *
     * @return self
     */
    public function setPastValues(array $pastValues): self
    {
        $this->initialized['pastValues'] = true;
        $this->pastValues = $pastValues;
        return $this;
    }
    /**
     * @return list<MoveDetailStatChangesItem>
     */
    public function getStatChanges(): array
    {
        return $this->statChanges;
    }
    /**
     * @param list<MoveDetailStatChangesItem> $statChanges
     *
     * @return self
     */
    public function setStatChanges(array $statChanges): self
    {
        $this->initialized['statChanges'] = true;
        $this->statChanges = $statChanges;
        return $this;
    }
    /**
     * @return SuperContestEffectSummary
     */
    public function getSuperContestEffect(): SuperContestEffectSummary
    {
        return $this->superContestEffect;
    }
    /**
     * @param SuperContestEffectSummary $superContestEffect
     *
     * @return self
     */
    public function setSuperContestEffect(SuperContestEffectSummary $superContestEffect): self
    {
        $this->initialized['superContestEffect'] = true;
        $this->superContestEffect = $superContestEffect;
        return $this;
    }
    /**
     * @return MoveTargetSummary
     */
    public function getTarget(): MoveTargetSummary
    {
        return $this->target;
    }
    /**
     * @param MoveTargetSummary $target
     *
     * @return self
     */
    public function setTarget(MoveTargetSummary $target): self
    {
        $this->initialized['target'] = true;
        $this->target = $target;
        return $this;
    }
    /**
     * @return TypeSummary
     */
    public function getType(): TypeSummary
    {
        return $this->type;
    }
    /**
     * @param TypeSummary $type
     *
     * @return self
     */
    public function setType(TypeSummary $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return list<MoveDetailMachinesItem>
     */
    public function getMachines(): array
    {
        return $this->machines;
    }
    /**
     * @param list<MoveDetailMachinesItem> $machines
     *
     * @return self
     */
    public function setMachines(array $machines): self
    {
        $this->initialized['machines'] = true;
        $this->machines = $machines;
        return $this;
    }
    /**
     * @return list<MoveFlavorText>
     */
    public function getFlavorTextEntries(): array
    {
        return $this->flavorTextEntries;
    }
    /**
     * @param list<MoveFlavorText> $flavorTextEntries
     *
     * @return self
     */
    public function setFlavorTextEntries(array $flavorTextEntries): self
    {
        $this->initialized['flavorTextEntries'] = true;
        $this->flavorTextEntries = $flavorTextEntries;
        return $this;
    }
    /**
     * @return list<MoveDetailLearnedByPokemonItem>
     */
    public function getLearnedByPokemon(): array
    {
        return $this->learnedByPokemon;
    }
    /**
     * @param list<MoveDetailLearnedByPokemonItem> $learnedByPokemon
     *
     * @return self
     */
    public function setLearnedByPokemon(array $learnedByPokemon): self
    {
        $this->initialized['learnedByPokemon'] = true;
        $this->learnedByPokemon = $learnedByPokemon;
        return $this;
    }
}