<?php

namespace App\DTO\ApiType;

use App\DTO\Common\GenerationGameIndexDTO;
use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class TypeDTO
{
    private int $id;

    private string $name;

    #[SerializedName('damage_relations')]
    private TypeRelationsDTO $damageRelations;

    /** @var TypeRelationsPastDTO[] */
    #[SerializedName('past_damage_relations')]
    private array $pastDamageRelations;

    /** @var GenerationGameIndexDTO[] */
    #[SerializedName('game_indices')]
    private array $gameIndices;

    private NamedResourceDTO $generation;

    #[SerializedName('move_damage_class')]
    private NamedResourceDTO $moveDamageClass;

    /** @var TypePokemonDTO[] */
    private array $pokemon;

    /** @var NamedResourceDTO[] */
    private array $moves;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getDamageRelations(): TypeRelationsDTO
    {
        return $this->damageRelations;
    }

    public function setDamageRelations(TypeRelationsDTO $damageRelations): self
    {
        $this->damageRelations = $damageRelations;
        return $this;
    }

    /**
     * @return TypeRelationsPastDTO[]
     */
    public function getPastDamageRelations(): array
    {
        return $this->pastDamageRelations;
    }

    /**
     * @param TypeRelationsPastDTO[] $pastDamageRelations
     */
    public function setPastDamageRelations(array $pastDamageRelations): self
    {
        $this->pastDamageRelations = $pastDamageRelations;
        return $this;
    }

    /**
     * @return GenerationGameIndexDTO[]
     */
    public function getGameIndices(): array
    {
        return $this->gameIndices;
    }

    /**
     * @param GenerationGameIndexDTO[] $gameIndices
     */
    public function setGameIndices(array $gameIndices): self
    {
        $this->gameIndices = $gameIndices;
        return $this;
    }

    public function getGeneration(): NamedResourceDTO
    {
        return $this->generation;
    }

    public function setGeneration(NamedResourceDTO $generation): self
    {
        $this->generation = $generation;
        return $this;
    }

    public function getMoveDamageClass(): NamedResourceDTO
    {
        return $this->moveDamageClass;
    }

    public function setMoveDamageClass(NamedResourceDTO $moveDamageClass): self
    {
        $this->moveDamageClass = $moveDamageClass;
        return $this;
    }

    /**
     * @return TypePokemonDTO[]
     */
    public function getPokemon(): array
    {
        return $this->pokemon;
    }

    /**
     * @param TypePokemonDTO[] $pokemon
     */
    public function setPokemon(array $pokemon): self
    {
        $this->pokemon = $pokemon;
        return $this;
    }

    /**
     * @return NamedResourceDTO[]
     */
    public function getMoves(): array
    {
        return $this->moves;
    }

    /**
     * @param NamedResourceDTO[] $moves
     */
    public function setMoves(array $moves): self
    {
        $this->moves = $moves;
        return $this;
    }
}
