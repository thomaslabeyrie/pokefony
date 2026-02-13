<?php

namespace App\DTO\ApiPokemonSpecies;

use App\DTO\Common\NamedResourceDTO;
use App\DTO\Common\ResourceDTO;
use App\DTO\FlavorTextDTO;
use Symfony\Component\Serializer\Attribute\SerializedName;

class PokemonSpeciesDTO
{
    private int $id;

    private string $name;

    private int $order;

    #[SerializedName('gender_rate')]
    private int $genderRate;

    #[SerializedName('capture_rate')]
    private int $captureRate;

    #[SerializedName('base_happiness')]
    private int $baseHappiness;

    #[SerializedName('is_baby')]
    private bool $isBaby;

    #[SerializedName('is_legendary')]
    private bool $isLegendary;

    #[SerializedName('is_mythical')]
    private bool $isMythical;

    #[SerializedName('hatch_counter')]
    private int $hatchCounter;

    #[SerializedName('has_gender_differences')]
    private bool $hasGenderDifferences;

    #[SerializedName('forms_switchable')]
    private bool $formsSwitchable;

    #[SerializedName('growth_rate')]
    private NamedResourceDTO $growthRate;

    /** @var PokemonSpeciesDexEntryDTO[] */
    #[SerializedName('pokedex_numbers')]
    private array $pokedexNumbers = [];

    /** @var NamedResourceDTO[] */
    #[SerializedName('egg_groups')]
    private array $eggGroups = [];

    private NamedResourceDTO $color;

    private NamedResourceDTO $shape;

    #[SerializedName('evolves_from_species')]
    private ?NamedResourceDTO $evolvesFromSpecies = null;

    #[SerializedName('evolution_chain')]
    private ResourceDTO $evolutionChain;

    private ?NamedResourceDTO $habitat = null;

    private NamedResourceDTO $generation;

    /** @var FlavorTextDTO[] */
    #[SerializedName('flavor_text_entries')]
    private array $flavorTextEntries = [];

    /* Getters & setters */

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

    public function getOrder(): int
    {
        return $this->order;
    }

    public function setOrder(int $order): self
    {
        $this->order = $order;

        return $this;
    }

    public function getGenderRate(): int
    {
        return $this->genderRate;
    }

    public function setGenderRate(int $genderRate): self
    {
        $this->genderRate = $genderRate;

        return $this;
    }

    public function getCaptureRate(): int
    {
        return $this->captureRate;
    }

    public function setCaptureRate(int $captureRate): self
    {
        $this->captureRate = $captureRate;

        return $this;
    }

    public function getBaseHappiness(): int
    {
        return $this->baseHappiness;
    }

    public function setBaseHappiness(int $baseHappiness): self
    {
        $this->baseHappiness = $baseHappiness;

        return $this;
    }

    public function isBaby(): bool
    {
        return $this->isBaby;
    }

    public function setIsBaby(bool $isBaby): self
    {
        $this->isBaby = $isBaby;

        return $this;
    }

    public function isLegendary(): bool
    {
        return $this->isLegendary;
    }

    public function setIsLegendary(bool $isLegendary): self
    {
        $this->isLegendary = $isLegendary;

        return $this;
    }

    public function isMythical(): bool
    {
        return $this->isMythical;
    }

    public function setIsMythical(bool $isMythical): self
    {
        $this->isMythical = $isMythical;

        return $this;
    }

    public function getHatchCounter(): int
    {
        return $this->hatchCounter;
    }

    public function setHatchCounter(int $hatchCounter): self
    {
        $this->hatchCounter = $hatchCounter;

        return $this;
    }

    public function hasGenderDifferences(): bool
    {
        return $this->hasGenderDifferences;
    }

    public function setHasGenderDifferences(bool $hasGenderDifferences): self
    {
        $this->hasGenderDifferences = $hasGenderDifferences;

        return $this;
    }

    public function isFormsSwitchable(): bool
    {
        return $this->formsSwitchable;
    }

    public function setFormsSwitchable(bool $formsSwitchable): self
    {
        $this->formsSwitchable = $formsSwitchable;

        return $this;
    }

    public function getGrowthRate(): NamedResourceDTO
    {
        return $this->growthRate;
    }

    public function setGrowthRate(NamedResourceDTO $growthRate): self
    {
        $this->growthRate = $growthRate;

        return $this;
    }

    public function getPokedexNumbers(): array
    {
        return $this->pokedexNumbers;
    }

    public function setPokedexNumbers(array $pokedexNumbers): self
    {
        $this->pokedexNumbers = $pokedexNumbers;

        return $this;
    }

    public function getEggGroups(): array
    {
        return $this->eggGroups;
    }

    public function setEggGroups(array $eggGroups): self
    {
        $this->eggGroups = $eggGroups;

        return $this;
    }

    public function getColor(): NamedResourceDTO
    {
        return $this->color;
    }

    public function setColor(NamedResourceDTO $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getShape(): NamedResourceDTO
    {
        return $this->shape;
    }

    public function setShape(NamedResourceDTO $shape): self
    {
        $this->shape = $shape;

        return $this;
    }

    public function getEvolvesFromSpecies(): ?NamedResourceDTO
    {
        return $this->evolvesFromSpecies;
    }

    public function setEvolvesFromSpecies(?NamedResourceDTO $evolvesFromSpecies): self
    {
        $this->evolvesFromSpecies = $evolvesFromSpecies;

        return $this;
    }

    public function getEvolutionChain(): ResourceDTO
    {
        return $this->evolutionChain;
    }

    public function setEvolutionChain(ResourceDTO $evolutionChain): self
    {
        $this->evolutionChain = $evolutionChain;

        return $this;
    }

    public function getHabitat(): ?NamedResourceDTO
    {
        return $this->habitat;
    }

    public function setHabitat(?NamedResourceDTO $habitat): self
    {
        $this->habitat = $habitat;

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

    public function getFlavorTextEntries(): array
    {
        return $this->flavorTextEntries;
    }

    public function setFlavorTextEntries(array $flavorTextEntries): self
    {
        $this->flavorTextEntries = $flavorTextEntries;

        return $this;
    }
}
