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

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getAccuracy(): ?int
    {
        return $this->accuracy;
    }

    public function setAccuracy(?int $accuracy): self
    {
        $this->initialized['accuracy'] = true;
        $this->accuracy = $accuracy;

        return $this;
    }

    public function getEffectChance(): int
    {
        return $this->effectChance;
    }

    public function setEffectChance(int $effectChance): self
    {
        $this->initialized['effectChance'] = true;
        $this->effectChance = $effectChance;

        return $this;
    }

    public function getPp(): ?int
    {
        return $this->pp;
    }

    public function setPp(?int $pp): self
    {
        $this->initialized['pp'] = true;
        $this->pp = $pp;

        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;

        return $this;
    }

    public function getPower(): ?int
    {
        return $this->power;
    }

    public function setPower(?int $power): self
    {
        $this->initialized['power'] = true;
        $this->power = $power;

        return $this;
    }

    public function getContestCombos(): MoveDetailContestCombos
    {
        return $this->contestCombos;
    }

    public function setContestCombos(MoveDetailContestCombos $contestCombos): self
    {
        $this->initialized['contestCombos'] = true;
        $this->contestCombos = $contestCombos;

        return $this;
    }

    public function getContestType(): ContestTypeSummary
    {
        return $this->contestType;
    }

    public function setContestType(ContestTypeSummary $contestType): self
    {
        $this->initialized['contestType'] = true;
        $this->contestType = $contestType;

        return $this;
    }

    public function getContestEffect(): ContestEffectSummary
    {
        return $this->contestEffect;
    }

    public function setContestEffect(ContestEffectSummary $contestEffect): self
    {
        $this->initialized['contestEffect'] = true;
        $this->contestEffect = $contestEffect;

        return $this;
    }

    public function getDamageClass(): MoveDamageClassSummary
    {
        return $this->damageClass;
    }

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
     */
    public function setEffectChanges(array $effectChanges): self
    {
        $this->initialized['effectChanges'] = true;
        $this->effectChanges = $effectChanges;

        return $this;
    }

    public function getGeneration(): GenerationSummary
    {
        return $this->generation;
    }

    public function setGeneration(GenerationSummary $generation): self
    {
        $this->initialized['generation'] = true;
        $this->generation = $generation;

        return $this;
    }

    public function getMeta(): MoveDetailMeta
    {
        return $this->meta;
    }

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
     */
    public function setStatChanges(array $statChanges): self
    {
        $this->initialized['statChanges'] = true;
        $this->statChanges = $statChanges;

        return $this;
    }

    public function getSuperContestEffect(): SuperContestEffectSummary
    {
        return $this->superContestEffect;
    }

    public function setSuperContestEffect(SuperContestEffectSummary $superContestEffect): self
    {
        $this->initialized['superContestEffect'] = true;
        $this->superContestEffect = $superContestEffect;

        return $this;
    }

    public function getTarget(): MoveTargetSummary
    {
        return $this->target;
    }

    public function setTarget(MoveTargetSummary $target): self
    {
        $this->initialized['target'] = true;
        $this->target = $target;

        return $this;
    }

    public function getType(): TypeSummary
    {
        return $this->type;
    }

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
     */
    public function setLearnedByPokemon(array $learnedByPokemon): self
    {
        $this->initialized['learnedByPokemon'] = true;
        $this->learnedByPokemon = $learnedByPokemon;

        return $this;
    }
}
