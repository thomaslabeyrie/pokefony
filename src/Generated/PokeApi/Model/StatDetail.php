<?php

namespace App\Generated\PokeApi\Model;

class StatDetail extends \ArrayObject
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
     * @var int
     */
    protected $gameIndex;
    /**
     * @var bool
     */
    protected $isBattleOnly;
    /**
     * @var StatDetailAffectingMoves
     */
    protected $affectingMoves;
    /**
     * @var StatDetailAffectingNatures
     */
    protected $affectingNatures;
    /**
     * @var list<CharacteristicSummary>
     */
    protected $characteristics;
    /**
     * @var MoveDamageClassSummary
     */
    protected $moveDamageClass;
    /**
     * @var list<StatName>
     */
    protected $names;

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

    public function getGameIndex(): int
    {
        return $this->gameIndex;
    }

    public function setGameIndex(int $gameIndex): self
    {
        $this->initialized['gameIndex'] = true;
        $this->gameIndex = $gameIndex;

        return $this;
    }

    public function getIsBattleOnly(): bool
    {
        return $this->isBattleOnly;
    }

    public function setIsBattleOnly(bool $isBattleOnly): self
    {
        $this->initialized['isBattleOnly'] = true;
        $this->isBattleOnly = $isBattleOnly;

        return $this;
    }

    public function getAffectingMoves(): StatDetailAffectingMoves
    {
        return $this->affectingMoves;
    }

    public function setAffectingMoves(StatDetailAffectingMoves $affectingMoves): self
    {
        $this->initialized['affectingMoves'] = true;
        $this->affectingMoves = $affectingMoves;

        return $this;
    }

    public function getAffectingNatures(): StatDetailAffectingNatures
    {
        return $this->affectingNatures;
    }

    public function setAffectingNatures(StatDetailAffectingNatures $affectingNatures): self
    {
        $this->initialized['affectingNatures'] = true;
        $this->affectingNatures = $affectingNatures;

        return $this;
    }

    /**
     * @return list<CharacteristicSummary>
     */
    public function getCharacteristics(): array
    {
        return $this->characteristics;
    }

    /**
     * @param list<CharacteristicSummary> $characteristics
     */
    public function setCharacteristics(array $characteristics): self
    {
        $this->initialized['characteristics'] = true;
        $this->characteristics = $characteristics;

        return $this;
    }

    public function getMoveDamageClass(): MoveDamageClassSummary
    {
        return $this->moveDamageClass;
    }

    public function setMoveDamageClass(MoveDamageClassSummary $moveDamageClass): self
    {
        $this->initialized['moveDamageClass'] = true;
        $this->moveDamageClass = $moveDamageClass;

        return $this;
    }

    /**
     * @return list<StatName>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param list<StatName> $names
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;

        return $this;
    }
}
