<?php

namespace App\Generated\PokeApi\Model;

class PokemonDetail extends \ArrayObject
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
    protected $baseExperience;
    /**
     * @var int|null
     */
    protected $height;
    /**
     * @var bool
     */
    protected $isDefault;
    /**
     * @var int|null
     */
    protected $order;
    /**
     * @var int|null
     */
    protected $weight;
    /**
     * @var list<PokemonDetailAbilitiesItem>
     */
    protected $abilities;
    /**
     * @var list<PokemonDetailPastAbilitiesItem>
     */
    protected $pastAbilities;
    /**
     * @var list<PokemonFormSummary>
     */
    protected $forms;
    /**
     * @var list<PokemonGameIndex>
     */
    protected $gameIndices;
    /**
     * @var list<PokemonDetailHeldItemsItem>
     */
    protected $heldItems;
    /**
     * @var string
     */
    protected $locationAreaEncounters;
    /**
     * @var list<PokemonDetailMovesItem>
     */
    protected $moves;
    /**
     * @var PokemonSpeciesSummary
     */
    protected $species;
    /**
     * @var PokemonDetailSprites
     */
    protected $sprites;
    /**
     * @var PokemonDetailCries
     */
    protected $cries;
    /**
     * @var list<PokemonStat>
     */
    protected $stats;
    /**
     * @var list<PokemonDetailTypesItem>
     */
    protected $types;
    /**
     * @var list<PokemonDetailPastTypesItem>
     */
    protected $pastTypes;

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

    public function getBaseExperience(): ?int
    {
        return $this->baseExperience;
    }

    public function setBaseExperience(?int $baseExperience): self
    {
        $this->initialized['baseExperience'] = true;
        $this->baseExperience = $baseExperience;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): self
    {
        $this->initialized['height'] = true;
        $this->height = $height;

        return $this;
    }

    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(bool $isDefault): self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;

        return $this;
    }

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(?int $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(?int $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return list<PokemonDetailAbilitiesItem>
     */
    public function getAbilities(): array
    {
        return $this->abilities;
    }

    /**
     * @param list<PokemonDetailAbilitiesItem> $abilities
     */
    public function setAbilities(array $abilities): self
    {
        $this->initialized['abilities'] = true;
        $this->abilities = $abilities;

        return $this;
    }

    /**
     * @return list<PokemonDetailPastAbilitiesItem>
     */
    public function getPastAbilities(): array
    {
        return $this->pastAbilities;
    }

    /**
     * @param list<PokemonDetailPastAbilitiesItem> $pastAbilities
     */
    public function setPastAbilities(array $pastAbilities): self
    {
        $this->initialized['pastAbilities'] = true;
        $this->pastAbilities = $pastAbilities;

        return $this;
    }

    /**
     * @return list<PokemonFormSummary>
     */
    public function getForms(): array
    {
        return $this->forms;
    }

    /**
     * @param list<PokemonFormSummary> $forms
     */
    public function setForms(array $forms): self
    {
        $this->initialized['forms'] = true;
        $this->forms = $forms;

        return $this;
    }

    /**
     * @return list<PokemonGameIndex>
     */
    public function getGameIndices(): array
    {
        return $this->gameIndices;
    }

    /**
     * @param list<PokemonGameIndex> $gameIndices
     */
    public function setGameIndices(array $gameIndices): self
    {
        $this->initialized['gameIndices'] = true;
        $this->gameIndices = $gameIndices;

        return $this;
    }

    /**
     * @return list<PokemonDetailHeldItemsItem>
     */
    public function getHeldItems(): array
    {
        return $this->heldItems;
    }

    /**
     * @param list<PokemonDetailHeldItemsItem> $heldItems
     */
    public function setHeldItems(array $heldItems): self
    {
        $this->initialized['heldItems'] = true;
        $this->heldItems = $heldItems;

        return $this;
    }

    public function getLocationAreaEncounters(): string
    {
        return $this->locationAreaEncounters;
    }

    public function setLocationAreaEncounters(string $locationAreaEncounters): self
    {
        $this->initialized['locationAreaEncounters'] = true;
        $this->locationAreaEncounters = $locationAreaEncounters;

        return $this;
    }

    /**
     * @return list<PokemonDetailMovesItem>
     */
    public function getMoves(): array
    {
        return $this->moves;
    }

    /**
     * @param list<PokemonDetailMovesItem> $moves
     */
    public function setMoves(array $moves): self
    {
        $this->initialized['moves'] = true;
        $this->moves = $moves;

        return $this;
    }

    public function getSpecies(): PokemonSpeciesSummary
    {
        return $this->species;
    }

    public function setSpecies(PokemonSpeciesSummary $species): self
    {
        $this->initialized['species'] = true;
        $this->species = $species;

        return $this;
    }

    public function getSprites(): PokemonDetailSprites
    {
        return $this->sprites;
    }

    public function setSprites(PokemonDetailSprites $sprites): self
    {
        $this->initialized['sprites'] = true;
        $this->sprites = $sprites;

        return $this;
    }

    public function getCries(): PokemonDetailCries
    {
        return $this->cries;
    }

    public function setCries(PokemonDetailCries $cries): self
    {
        $this->initialized['cries'] = true;
        $this->cries = $cries;

        return $this;
    }

    /**
     * @return list<PokemonStat>
     */
    public function getStats(): array
    {
        return $this->stats;
    }

    /**
     * @param list<PokemonStat> $stats
     */
    public function setStats(array $stats): self
    {
        $this->initialized['stats'] = true;
        $this->stats = $stats;

        return $this;
    }

    /**
     * @return list<PokemonDetailTypesItem>
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * @param list<PokemonDetailTypesItem> $types
     */
    public function setTypes(array $types): self
    {
        $this->initialized['types'] = true;
        $this->types = $types;

        return $this;
    }

    /**
     * @return list<PokemonDetailPastTypesItem>
     */
    public function getPastTypes(): array
    {
        return $this->pastTypes;
    }

    /**
     * @param list<PokemonDetailPastTypesItem> $pastTypes
     */
    public function setPastTypes(array $pastTypes): self
    {
        $this->initialized['pastTypes'] = true;
        $this->pastTypes = $pastTypes;

        return $this;
    }
}
