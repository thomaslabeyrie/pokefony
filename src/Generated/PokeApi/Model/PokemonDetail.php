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
    public function getBaseExperience(): ?int
    {
        return $this->baseExperience;
    }
    /**
     * @param int|null $baseExperience
     *
     * @return self
     */
    public function setBaseExperience(?int $baseExperience): self
    {
        $this->initialized['baseExperience'] = true;
        $this->baseExperience = $baseExperience;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }
    /**
     * @param int|null $height
     *
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }
    /**
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault): self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getOrder(): ?int
    {
        return $this->order;
    }
    /**
     * @param int|null $order
     *
     * @return self
     */
    public function setOrder(?int $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }
    /**
     * @param int|null $weight
     *
     * @return self
     */
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
     *
     * @return self
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
     *
     * @return self
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
     *
     * @return self
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
     *
     * @return self
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
     *
     * @return self
     */
    public function setHeldItems(array $heldItems): self
    {
        $this->initialized['heldItems'] = true;
        $this->heldItems = $heldItems;
        return $this;
    }
    /**
     * @return string
     */
    public function getLocationAreaEncounters(): string
    {
        return $this->locationAreaEncounters;
    }
    /**
     * @param string $locationAreaEncounters
     *
     * @return self
     */
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
     * @return PokemonSpeciesSummary
     */
    public function getSpecies(): PokemonSpeciesSummary
    {
        return $this->species;
    }
    /**
     * @param PokemonSpeciesSummary $species
     *
     * @return self
     */
    public function setSpecies(PokemonSpeciesSummary $species): self
    {
        $this->initialized['species'] = true;
        $this->species = $species;
        return $this;
    }
    /**
     * @return PokemonDetailSprites
     */
    public function getSprites(): PokemonDetailSprites
    {
        return $this->sprites;
    }
    /**
     * @param PokemonDetailSprites $sprites
     *
     * @return self
     */
    public function setSprites(PokemonDetailSprites $sprites): self
    {
        $this->initialized['sprites'] = true;
        $this->sprites = $sprites;
        return $this;
    }
    /**
     * @return PokemonDetailCries
     */
    public function getCries(): PokemonDetailCries
    {
        return $this->cries;
    }
    /**
     * @param PokemonDetailCries $cries
     *
     * @return self
     */
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
     *
     * @return self
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
     *
     * @return self
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
     *
     * @return self
     */
    public function setPastTypes(array $pastTypes): self
    {
        $this->initialized['pastTypes'] = true;
        $this->pastTypes = $pastTypes;
        return $this;
    }
}