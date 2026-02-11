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
     * @return int
     */
    public function getGameIndex(): int
    {
        return $this->gameIndex;
    }
    /**
     * @param int $gameIndex
     *
     * @return self
     */
    public function setGameIndex(int $gameIndex): self
    {
        $this->initialized['gameIndex'] = true;
        $this->gameIndex = $gameIndex;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsBattleOnly(): bool
    {
        return $this->isBattleOnly;
    }
    /**
     * @param bool $isBattleOnly
     *
     * @return self
     */
    public function setIsBattleOnly(bool $isBattleOnly): self
    {
        $this->initialized['isBattleOnly'] = true;
        $this->isBattleOnly = $isBattleOnly;
        return $this;
    }
    /**
     * @return StatDetailAffectingMoves
     */
    public function getAffectingMoves(): StatDetailAffectingMoves
    {
        return $this->affectingMoves;
    }
    /**
     * @param StatDetailAffectingMoves $affectingMoves
     *
     * @return self
     */
    public function setAffectingMoves(StatDetailAffectingMoves $affectingMoves): self
    {
        $this->initialized['affectingMoves'] = true;
        $this->affectingMoves = $affectingMoves;
        return $this;
    }
    /**
     * @return StatDetailAffectingNatures
     */
    public function getAffectingNatures(): StatDetailAffectingNatures
    {
        return $this->affectingNatures;
    }
    /**
     * @param StatDetailAffectingNatures $affectingNatures
     *
     * @return self
     */
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
     *
     * @return self
     */
    public function setCharacteristics(array $characteristics): self
    {
        $this->initialized['characteristics'] = true;
        $this->characteristics = $characteristics;
        return $this;
    }
    /**
     * @return MoveDamageClassSummary
     */
    public function getMoveDamageClass(): MoveDamageClassSummary
    {
        return $this->moveDamageClass;
    }
    /**
     * @param MoveDamageClassSummary $moveDamageClass
     *
     * @return self
     */
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