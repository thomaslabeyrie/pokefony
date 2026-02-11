<?php

namespace App\Generated\PokeApi\Model;

class PokemonSpeciesDetail extends \ArrayObject
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
    protected $order;
    /**
     * @var int|null
     */
    protected $genderRate;
    /**
     * @var int|null
     */
    protected $captureRate;
    /**
     * @var int|null
     */
    protected $baseHappiness;
    /**
     * @var bool
     */
    protected $isBaby;
    /**
     * @var bool
     */
    protected $isLegendary;
    /**
     * @var bool
     */
    protected $isMythical;
    /**
     * @var int|null
     */
    protected $hatchCounter;
    /**
     * @var bool
     */
    protected $hasGenderDifferences;
    /**
     * @var bool
     */
    protected $formsSwitchable;
    /**
     * @var GrowthRateSummary
     */
    protected $growthRate;
    /**
     * @var list<PokemonDexEntry>
     */
    protected $pokedexNumbers;
    /**
     * @var list<PokemonSpeciesDetailEggGroupsItem>
     */
    protected $eggGroups;
    /**
     * @var PokemonColorSummary
     */
    protected $color;
    /**
     * @var PokemonShapeSummary
     */
    protected $shape;
    /**
     * @var PokemonSpeciesSummary
     */
    protected $evolvesFromSpecies;
    /**
     * @var EvolutionChainSummary
     */
    protected $evolutionChain;
    /**
     * @var PokemonHabitatSummary
     */
    protected $habitat;
    /**
     * @var GenerationSummary
     */
    protected $generation;
    /**
     * @var list<PokemonSpeciesDetailNamesItem>
     */
    protected $names;
    /**
     * @var list<PokemonSpeciesDetailPalParkEncountersItem>
     */
    protected $palParkEncounters;
    /**
     * @var list<PokemonSpeciesDescription>
     */
    protected $formDescriptions;
    /**
     * @var list<PokemonSpeciesFlavorText>
     */
    protected $flavorTextEntries;
    /**
     * @var list<PokemonSpeciesDetailGeneraItem>
     */
    protected $genera;
    /**
     * @var list<PokemonSpeciesDetailVarietiesItem>
     */
    protected $varieties;
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
    public function getGenderRate(): ?int
    {
        return $this->genderRate;
    }
    /**
     * @param int|null $genderRate
     *
     * @return self
     */
    public function setGenderRate(?int $genderRate): self
    {
        $this->initialized['genderRate'] = true;
        $this->genderRate = $genderRate;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getCaptureRate(): ?int
    {
        return $this->captureRate;
    }
    /**
     * @param int|null $captureRate
     *
     * @return self
     */
    public function setCaptureRate(?int $captureRate): self
    {
        $this->initialized['captureRate'] = true;
        $this->captureRate = $captureRate;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getBaseHappiness(): ?int
    {
        return $this->baseHappiness;
    }
    /**
     * @param int|null $baseHappiness
     *
     * @return self
     */
    public function setBaseHappiness(?int $baseHappiness): self
    {
        $this->initialized['baseHappiness'] = true;
        $this->baseHappiness = $baseHappiness;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsBaby(): bool
    {
        return $this->isBaby;
    }
    /**
     * @param bool $isBaby
     *
     * @return self
     */
    public function setIsBaby(bool $isBaby): self
    {
        $this->initialized['isBaby'] = true;
        $this->isBaby = $isBaby;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsLegendary(): bool
    {
        return $this->isLegendary;
    }
    /**
     * @param bool $isLegendary
     *
     * @return self
     */
    public function setIsLegendary(bool $isLegendary): self
    {
        $this->initialized['isLegendary'] = true;
        $this->isLegendary = $isLegendary;
        return $this;
    }
    /**
     * @return bool
     */
    public function getIsMythical(): bool
    {
        return $this->isMythical;
    }
    /**
     * @param bool $isMythical
     *
     * @return self
     */
    public function setIsMythical(bool $isMythical): self
    {
        $this->initialized['isMythical'] = true;
        $this->isMythical = $isMythical;
        return $this;
    }
    /**
     * @return int|null
     */
    public function getHatchCounter(): ?int
    {
        return $this->hatchCounter;
    }
    /**
     * @param int|null $hatchCounter
     *
     * @return self
     */
    public function setHatchCounter(?int $hatchCounter): self
    {
        $this->initialized['hatchCounter'] = true;
        $this->hatchCounter = $hatchCounter;
        return $this;
    }
    /**
     * @return bool
     */
    public function getHasGenderDifferences(): bool
    {
        return $this->hasGenderDifferences;
    }
    /**
     * @param bool $hasGenderDifferences
     *
     * @return self
     */
    public function setHasGenderDifferences(bool $hasGenderDifferences): self
    {
        $this->initialized['hasGenderDifferences'] = true;
        $this->hasGenderDifferences = $hasGenderDifferences;
        return $this;
    }
    /**
     * @return bool
     */
    public function getFormsSwitchable(): bool
    {
        return $this->formsSwitchable;
    }
    /**
     * @param bool $formsSwitchable
     *
     * @return self
     */
    public function setFormsSwitchable(bool $formsSwitchable): self
    {
        $this->initialized['formsSwitchable'] = true;
        $this->formsSwitchable = $formsSwitchable;
        return $this;
    }
    /**
     * @return GrowthRateSummary
     */
    public function getGrowthRate(): GrowthRateSummary
    {
        return $this->growthRate;
    }
    /**
     * @param GrowthRateSummary $growthRate
     *
     * @return self
     */
    public function setGrowthRate(GrowthRateSummary $growthRate): self
    {
        $this->initialized['growthRate'] = true;
        $this->growthRate = $growthRate;
        return $this;
    }
    /**
     * @return list<PokemonDexEntry>
     */
    public function getPokedexNumbers(): array
    {
        return $this->pokedexNumbers;
    }
    /**
     * @param list<PokemonDexEntry> $pokedexNumbers
     *
     * @return self
     */
    public function setPokedexNumbers(array $pokedexNumbers): self
    {
        $this->initialized['pokedexNumbers'] = true;
        $this->pokedexNumbers = $pokedexNumbers;
        return $this;
    }
    /**
     * @return list<PokemonSpeciesDetailEggGroupsItem>
     */
    public function getEggGroups(): array
    {
        return $this->eggGroups;
    }
    /**
     * @param list<PokemonSpeciesDetailEggGroupsItem> $eggGroups
     *
     * @return self
     */
    public function setEggGroups(array $eggGroups): self
    {
        $this->initialized['eggGroups'] = true;
        $this->eggGroups = $eggGroups;
        return $this;
    }
    /**
     * @return PokemonColorSummary
     */
    public function getColor(): PokemonColorSummary
    {
        return $this->color;
    }
    /**
     * @param PokemonColorSummary $color
     *
     * @return self
     */
    public function setColor(PokemonColorSummary $color): self
    {
        $this->initialized['color'] = true;
        $this->color = $color;
        return $this;
    }
    /**
     * @return PokemonShapeSummary
     */
    public function getShape(): PokemonShapeSummary
    {
        return $this->shape;
    }
    /**
     * @param PokemonShapeSummary $shape
     *
     * @return self
     */
    public function setShape(PokemonShapeSummary $shape): self
    {
        $this->initialized['shape'] = true;
        $this->shape = $shape;
        return $this;
    }
    /**
     * @return PokemonSpeciesSummary
     */
    public function getEvolvesFromSpecies(): PokemonSpeciesSummary
    {
        return $this->evolvesFromSpecies;
    }
    /**
     * @param PokemonSpeciesSummary $evolvesFromSpecies
     *
     * @return self
     */
    public function setEvolvesFromSpecies(PokemonSpeciesSummary $evolvesFromSpecies): self
    {
        $this->initialized['evolvesFromSpecies'] = true;
        $this->evolvesFromSpecies = $evolvesFromSpecies;
        return $this;
    }
    /**
     * @return EvolutionChainSummary
     */
    public function getEvolutionChain(): EvolutionChainSummary
    {
        return $this->evolutionChain;
    }
    /**
     * @param EvolutionChainSummary $evolutionChain
     *
     * @return self
     */
    public function setEvolutionChain(EvolutionChainSummary $evolutionChain): self
    {
        $this->initialized['evolutionChain'] = true;
        $this->evolutionChain = $evolutionChain;
        return $this;
    }
    /**
     * @return PokemonHabitatSummary
     */
    public function getHabitat(): PokemonHabitatSummary
    {
        return $this->habitat;
    }
    /**
     * @param PokemonHabitatSummary $habitat
     *
     * @return self
     */
    public function setHabitat(PokemonHabitatSummary $habitat): self
    {
        $this->initialized['habitat'] = true;
        $this->habitat = $habitat;
        return $this;
    }
    /**
     * @return GenerationSummary
     */
    public function getGeneration(): GenerationSummary
    {
        return $this->generation;
    }
    /**
     * @param GenerationSummary $generation
     *
     * @return self
     */
    public function setGeneration(GenerationSummary $generation): self
    {
        $this->initialized['generation'] = true;
        $this->generation = $generation;
        return $this;
    }
    /**
     * @return list<PokemonSpeciesDetailNamesItem>
     */
    public function getNames(): array
    {
        return $this->names;
    }
    /**
     * @param list<PokemonSpeciesDetailNamesItem> $names
     *
     * @return self
     */
    public function setNames(array $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * @return list<PokemonSpeciesDetailPalParkEncountersItem>
     */
    public function getPalParkEncounters(): array
    {
        return $this->palParkEncounters;
    }
    /**
     * @param list<PokemonSpeciesDetailPalParkEncountersItem> $palParkEncounters
     *
     * @return self
     */
    public function setPalParkEncounters(array $palParkEncounters): self
    {
        $this->initialized['palParkEncounters'] = true;
        $this->palParkEncounters = $palParkEncounters;
        return $this;
    }
    /**
     * @return list<PokemonSpeciesDescription>
     */
    public function getFormDescriptions(): array
    {
        return $this->formDescriptions;
    }
    /**
     * @param list<PokemonSpeciesDescription> $formDescriptions
     *
     * @return self
     */
    public function setFormDescriptions(array $formDescriptions): self
    {
        $this->initialized['formDescriptions'] = true;
        $this->formDescriptions = $formDescriptions;
        return $this;
    }
    /**
     * @return list<PokemonSpeciesFlavorText>
     */
    public function getFlavorTextEntries(): array
    {
        return $this->flavorTextEntries;
    }
    /**
     * @param list<PokemonSpeciesFlavorText> $flavorTextEntries
     *
     * @return self
     */
    public function setFlavorTextEntries(array $flavorTextEntries): self
    {
        $this->initialized['flavorTextEntries'] = true;
        $this->flavorTextEntries = $flavorTextEntries;
        return $this;
    }
    /**
     * @return list<PokemonSpeciesDetailGeneraItem>
     */
    public function getGenera(): array
    {
        return $this->genera;
    }
    /**
     * @param list<PokemonSpeciesDetailGeneraItem> $genera
     *
     * @return self
     */
    public function setGenera(array $genera): self
    {
        $this->initialized['genera'] = true;
        $this->genera = $genera;
        return $this;
    }
    /**
     * @return list<PokemonSpeciesDetailVarietiesItem>
     */
    public function getVarieties(): array
    {
        return $this->varieties;
    }
    /**
     * @param list<PokemonSpeciesDetailVarietiesItem> $varieties
     *
     * @return self
     */
    public function setVarieties(array $varieties): self
    {
        $this->initialized['varieties'] = true;
        $this->varieties = $varieties;
        return $this;
    }
}