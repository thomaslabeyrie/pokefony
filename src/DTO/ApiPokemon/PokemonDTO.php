<?php

namespace App\DTO\ApiPokemon;

use App\DTO\ApiPokemon\HeldItem\PokemonHeldItemDTO;
use App\DTO\ApiPokemon\Move\PokemonMoveDTO;
use App\DTO\ApiPokemon\Sprites\PokemonSpritesDTO;
use App\DTO\Common\NamedResourceDTO;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonDTO
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

    /** @var PokemonAbilityDTO[] */
    #[Groups(['pokemon'])]
    private array $abilities;

    /** @var NamedResourceDTO[] */
    #[Groups(['pokemon'])]
    private array $forms;

    /** @var VersionGameIndexDTO[] */
    #[Groups(['pokemon'])]
    #[SerializedName('game_indices')]
    private array $gameIndices;

    /** @var PokemonHeldItemDTO[] */
    #[Groups(['pokemon'])]
    #[SerializedName('held_items')]
    private array $heldItems;

    #[Groups(['pokemon'])]
    #[SerializedName('location_area_encounters')]
    private string $locationAreaEncounters;

    /** @var PokemonMoveDTO[] */
    #[Groups(['pokemon'])]
    private array $moves;

    #[Groups(['pokemon'])]
    private NamedResourceDTO $species;

    #[Groups(['pokemon', 'pokedex'])]
    private PokemonSpritesDTO $sprites;

    #[Groups(['pokemon'])]
    private PokemonCriesDTO $cries;

    /** @var PokemonStatDTO[] */
    #[Groups(['pokemon'])]
    private array $stats;

    /** @var PokemonTypeDTO[] */
    #[Groups(['pokemon', 'pokedex'])]
    private array $types;

    /** @var PokemonTypePastDTO[] */
    #[Groups(['pokemon'])]
    #[SerializedName('past_types')]
    private array $pastTypes;

    /** @var PokemonAbilityPastDTO[] */
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
     * @return PokemonAbilityDTO[]
     */
    public function getAbilities(): array
    {
        return $this->abilities;
    }

    /**
     * @return NamedResourceDTO[]
     */
    public function getForms(): array
    {
        return $this->forms;
    }

    /**
     * @return VersionGameIndexDTO[]
     */
    public function getGameIndices(): array
    {
        return $this->gameIndices;
    }

    /**
     * @return PokemonHeldItemDTO[]
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
     * @return PokemonMoveDTO[]
     */
    public function getMoves(): array
    {
        return $this->moves;
    }

    public function getSpecies(): NamedResourceDTO
    {
        return $this->species;
    }

    public function getSprites(): PokemonSpritesDTO
    {
        return $this->sprites;
    }

    public function getCries(): PokemonCriesDTO
    {
        return $this->cries;
    }

    /**
     * @return PokemonStatDTO[]
     */
    public function getStats(): array
    {
        return $this->stats;
    }

    /**
     * @return PokemonTypeDTO[]
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * @return PokemonTypePastDTO[]
     */
    public function getPastTypes(): array
    {
        return $this->pastTypes;
    }

    /**
     * @return PokemonAbilityPastDTO[]
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
     * @param PokemonAbilityDTO[] $abilities
     */
    public function setAbilities(array $abilities): self
    {
        $this->abilities = $abilities;
        return $this;
    }

    /**
     * @param NamedResourceDTO[] $forms
     */
    public function setForms(array $forms): self
    {
        $this->forms = $forms;
        return $this;
    }

    /**
     * @param VersionGameIndexDTO[] $gameIndices
     */
    public function setGameIndices(array $gameIndices): self
    {
        $this->gameIndices = $gameIndices;
        return $this;
    }

    /**
     * @param PokemonHeldItemDTO[] $heldItems
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
     * @param PokemonMoveDTO[] $moves
     */
    public function setMoves(array $moves): self
    {
        $this->moves = $moves;
        return $this;
    }

    public function setSpecies(NamedResourceDTO $species): self
    {
        $this->species = $species;
        return $this;
    }

    public function setSprites(PokemonSpritesDTO $sprites): self
    {
        $this->sprites = $sprites;
        return $this;
    }

    public function setCries(PokemonCriesDTO $cries): self
    {
        $this->cries = $cries;
        return $this;
    }

    /**
     * @param PokemonStatDTO[] $stats
     */
    public function setStats(array $stats): self
    {
        $this->stats = $stats;
        return $this;
    }

    /**
     * @param PokemonTypeDTO[] $types
     */
    public function setTypes(array $types): self
    {
        $this->types = $types;
        return $this;
    }

    /**
     * @param PokemonTypePastDTO[] $pastTypes
     */
    public function setPastTypes(array $pastTypes): self
    {
        $this->pastTypes = $pastTypes;
        return $this;
    }

    /**
     * @param PokemonAbilityPastDTO[] $pastAbilities
     */
    public function setPastAbilities(array $pastAbilities): self
    {
        $this->pastAbilities = $pastAbilities;
        return $this;
    }
}
