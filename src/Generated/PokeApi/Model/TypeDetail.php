<?php

namespace App\Generated\PokeApi\Model;

class TypeDetail extends \ArrayObject
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
     * @var TypeDetailDamageRelations
     */
    protected $damageRelations;
    /**
     * @var list<TypeDetailPastDamageRelationsItem>
     */
    protected $pastDamageRelations;
    /**
     * @var list<TypeGameIndex>
     */
    protected $gameIndices;
    /**
     * @var GenerationSummary
     */
    protected $generation;
    /**
     * @var MoveDamageClassSummary
     */
    protected $moveDamageClass;
    /**
     * @var list<AbilityName>
     */
    protected $names;
    /**
     * @var list<TypeDetailPokemonItem>
     */
    protected $pokemon;
    /**
     * @var list<MoveSummary>
     */
    protected $moves;
    /**
     * @var array<string, array<string, TypeDetailSpritesItemItem>>
     */
    protected $sprites;

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

    public function getDamageRelations(): TypeDetailDamageRelations
    {
        return $this->damageRelations;
    }

    public function setDamageRelations(TypeDetailDamageRelations $damageRelations): self
    {
        $this->initialized['damageRelations'] = true;
        $this->damageRelations = $damageRelations;

        return $this;
    }

    /**
     * @return list<TypeDetailPastDamageRelationsItem>
     */
    public function getPastDamageRelations(): array
    {
        return $this->pastDamageRelations;
    }

    /**
     * @param list<TypeDetailPastDamageRelationsItem> $pastDamageRelations
     */
    public function setPastDamageRelations(array $pastDamageRelations): self
    {
        $this->initialized['pastDamageRelations'] = true;
        $this->pastDamageRelations = $pastDamageRelations;

        return $this;
    }

    /**
     * @return list<TypeGameIndex>
     */
    public function getGameIndices(): array
    {
        return $this->gameIndices;
    }

    /**
     * @param list<TypeGameIndex> $gameIndices
     */
    public function setGameIndices(array $gameIndices): self
    {
        $this->initialized['gameIndices'] = true;
        $this->gameIndices = $gameIndices;

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
     * @return list<AbilityName>
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param list<AbilityName> $names
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;

        return $this;
    }

    /**
     * @return list<TypeDetailPokemonItem>
     */
    public function getPokemon(): array
    {
        return $this->pokemon;
    }

    /**
     * @param list<TypeDetailPokemonItem> $pokemon
     */
    public function setPokemon(array $pokemon): self
    {
        $this->initialized['pokemon'] = true;
        $this->pokemon = $pokemon;

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

    /**
     * @return array<string, array<string, TypeDetailSpritesItemItem>>
     */
    public function getSprites(): iterable
    {
        return $this->sprites;
    }

    /**
     * @param array<string, array<string, TypeDetailSpritesItemItem>> $sprites
     */
    public function setSprites(iterable $sprites): self
    {
        $this->initialized['sprites'] = true;
        $this->sprites = $sprites;

        return $this;
    }
}
