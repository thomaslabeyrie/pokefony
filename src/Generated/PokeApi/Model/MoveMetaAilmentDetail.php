<?php

namespace App\Generated\PokeApi\Model;

class MoveMetaAilmentDetail extends \ArrayObject
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
     * @var list<MoveMetaAilmentDetailMovesItem>
     */
    protected $moves;
    /**
     * @var list<MoveMetaAilmentName>
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
     * @return list<MoveMetaAilmentDetailMovesItem>
     */
    public function getMoves(): array
    {
        return $this->moves;
    }
    /**
     * @param list<MoveMetaAilmentDetailMovesItem> $moves
     *
     * @return self
     */
    public function setMoves(array $moves): self
    {
        $this->initialized['moves'] = true;
        $this->moves = $moves;
        return $this;
    }
    /**
     * @return list<MoveMetaAilmentName>
     */
    public function getNames(): array
    {
        return $this->names;
    }
    /**
     * @param list<MoveMetaAilmentName> $names
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