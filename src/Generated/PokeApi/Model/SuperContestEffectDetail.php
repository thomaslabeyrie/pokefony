<?php

namespace App\Generated\PokeApi\Model;

class SuperContestEffectDetail extends \ArrayObject
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
     * @var int
     */
    protected $appeal;
    /**
     * @var list<SuperContestEffectFlavorText>
     */
    protected $flavorTextEntries;
    /**
     * @var list<MoveSummary>
     */
    protected $moves;

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

    public function getAppeal(): int
    {
        return $this->appeal;
    }

    public function setAppeal(int $appeal): self
    {
        $this->initialized['appeal'] = true;
        $this->appeal = $appeal;

        return $this;
    }

    /**
     * @return list<SuperContestEffectFlavorText>
     */
    public function getFlavorTextEntries(): array
    {
        return $this->flavorTextEntries;
    }

    /**
     * @param list<SuperContestEffectFlavorText> $flavorTextEntries
     */
    public function setFlavorTextEntries(array $flavorTextEntries): self
    {
        $this->initialized['flavorTextEntries'] = true;
        $this->flavorTextEntries = $flavorTextEntries;

        return $this;
    }

    /**
     * @return list<MoveSummary>
     */
    public function getMoves(): array
    {
        return $this->moves;
    }

    /**
     * @param list<MoveSummary> $moves
     */
    public function setMoves(array $moves): self
    {
        $this->initialized['moves'] = true;
        $this->moves = $moves;

        return $this;
    }
}
