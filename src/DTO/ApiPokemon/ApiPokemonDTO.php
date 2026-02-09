<?php

namespace App\DTO\ApiPokemon;

use App\DTO\ApiPokemon\HeldItem\HeldItem;
use App\DTO\ApiPokemon\Move\Move;
use App\DTO\ApiPokemon\Sprites\Sprites;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class ApiPokemonDTO
{
    #[Groups(['pokemon', 'pokedex'])]
    private int $id;

    #[Groups(['pokemon', 'pokedex'])]
    private string $name;

    #[Groups(['pokemon'])]
    #[SerializedName('base_experience')]
    private int $baseExperience;

    #[Groups(['pokemon'])]
    private int $height;

    #[Groups(['pokemon'])]
    #[SerializedName('is_default')]
    private bool $isDefault;

    #[Groups(['pokemon'])]
    private int $order;

    #[Groups(['pokemon'])]
    private int $weight;

    /** @var Ability[] */
    #[Groups(['pokemon'])]
    private array $abilities;

    /** @var Form[] */
    #[Groups(['pokemon'])]
    private array $forms;

    /** @var GameIndex[] */
    #[Groups(['pokemon'])]
    #[SerializedName('game_indices')]
    private array $gameIndices;

    /** @var HeldItem[] */
    #[Groups(['pokemon'])]
    #[SerializedName('held_items')]
    private array $heldItems;

    #[Groups(['pokemon'])]
    #[SerializedName('location_area_encounters')]
    private string $locationAreaEncounters;

    /** @var Move[] */
    #[Groups(['pokemon'])]
    private array $moves;

    #[Groups(['pokemon'])]
    private Species $species;

    #[Groups(['pokemon', 'pokedex'])]
    private Sprites $sprites;

    #[Groups(['pokemon'])]
    private Cries $cries;

    /** @var Stat[] */
    #[Groups(['pokemon'])]
    private array $stats;

    /** @var Type[] */
    #[Groups(['pokemon', 'pokedex'])]
    private array $types;

    /** @var PastType[] */
    #[Groups(['pokemon'])]
    #[SerializedName('past_types')]
    private array $pastTypes;

    /** @var PastAbility[] */
    #[Groups(['pokemon'])]
    #[SerializedName('past_abilities')]
    private array $pastAbilities;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBaseExperience(): int
    {
        return $this->baseExperience;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function isDefault(): bool
    {
        return $this->isDefault;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @return Ability[]
     */
    public function getAbilities(): array
    {
        return $this->abilities;
    }

    /**
     * @return Form[]
     */
    public function getForms(): array
    {
        return $this->forms;
    }

    /**
     * @return GameIndex[]
     */
    public function getGameIndices(): array
    {
        return $this->gameIndices;
    }

    /**
     * @return HeldItem[]
     */
    public function getHeldItems(): array
    {
        return $this->heldItems;
    }

    public function getLocationAreaEncounters(): string
    {
        return $this->locationAreaEncounters;
    }

    /**
     * @return Move[]
     */
    public function getMoves(): array
    {
        return $this->moves;
    }

    public function getSpecies(): Species
    {
        return $this->species;
    }

    public function getSprites(): Sprites
    {
        return $this->sprites;
    }

    public function getCries(): Cries
    {
        return $this->cries;
    }

    /**
     * @return Stat[]
     */
    public function getStats(): array
    {
        return $this->stats;
    }

    /**
     * @return Type[]
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * @return PastType[]
     */
    public function getPastTypes(): array
    {
        return $this->pastTypes;
    }

    /**
     * @return PastAbility[]
     */
    public function getPastAbilities(): array
    {
        return $this->pastAbilities;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setBaseExperience(int $baseExperience): self
    {
        $this->baseExperience = $baseExperience;
        return $this;
    }

    public function setHeight(int $height): self
    {
        $this->height = $height;
        return $this;
    }

    public function setIsDefault(bool $isDefault): self
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    public function setOrder(int $order): self
    {
        $this->order = $order;
        return $this;
    }

    public function setWeight(int $weight): self
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @param Ability[] $abilities
     */
    public function setAbilities(array $abilities): self
    {
        $this->abilities = $abilities;
        return $this;
    }

    /**
     * @param Form[] $forms
     */
    public function setForms(array $forms): self
    {
        $this->forms = $forms;
        return $this;
    }

    /**
     * @param GameIndex[] $gameIndices
     */
    public function setGameIndices(array $gameIndices): self
    {
        $this->gameIndices = $gameIndices;
        return $this;
    }

    /**
     * @param HeldItem[] $heldItems
     */
    public function setHeldItems(array $heldItems): self
    {
        $this->heldItems = $heldItems;
        return $this;
    }

    public function setLocationAreaEncounters(string $locationAreaEncounters): self
    {
        $this->locationAreaEncounters = $locationAreaEncounters;
        return $this;
    }

    /**
     * @param Move[] $moves
     */
    public function setMoves(array $moves): self
    {
        $this->moves = $moves;
        return $this;
    }

    public function setSpecies(Species $species): self
    {
        $this->species = $species;
        return $this;
    }

    public function setSprites(Sprites $sprites): self
    {
        $this->sprites = $sprites;
        return $this;
    }

    public function setCries(Cries $cries): self
    {
        $this->cries = $cries;
        return $this;
    }

    /**
     * @param Stat[] $stats
     */
    public function setStats(array $stats): self
    {
        $this->stats = $stats;
        return $this;
    }

    /**
     * @param Type[] $types
     */
    public function setTypes(array $types): self
    {
        $this->types = $types;
        return $this;
    }

    /**
     * @param PastType[] $pastTypes
     */
    public function setPastTypes(array $pastTypes): self
    {
        $this->pastTypes = $pastTypes;
        return $this;
    }

    /**
     * @param PastAbility[] $pastAbilities
     */
    public function setPastAbilities(array $pastAbilities): self
    {
        $this->pastAbilities = $pastAbilities;
        return $this;
    }
}
