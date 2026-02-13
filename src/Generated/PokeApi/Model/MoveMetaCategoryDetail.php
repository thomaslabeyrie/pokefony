<?php

namespace App\Generated\PokeApi\Model;

class MoveMetaCategoryDetail extends \ArrayObject
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
     * @var list<MoveMetaCategoryDescription>
     */
    protected $descriptions;
    /**
     * @var list<MoveMetaCategoryDetailMovesItem>
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

    /**
     * @return list<MoveMetaCategoryDescription>
     */
    public function getDescriptions(): array
    {
        return $this->descriptions;
    }

    /**
     * @param list<MoveMetaCategoryDescription> $descriptions
     */
    public function setDescriptions(array $descriptions): self
    {
        $this->initialized['descriptions'] = true;
        $this->descriptions = $descriptions;

        return $this;
    }

    /**
     * @return list<MoveMetaCategoryDetailMovesItem>
     */
    public function getMoves(): array
    {
        return $this->moves;
    }

    /**
     * @param list<MoveMetaCategoryDetailMovesItem> $moves
     */
    public function setMoves(array $moves): self
    {
        $this->initialized['moves'] = true;
        $this->moves = $moves;

        return $this;
    }
}
