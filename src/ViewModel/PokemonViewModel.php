<?php

namespace App\ViewModel;

use App\PokeApiClient\DTO\Evolution\EvolutionChainDTO;
use App\PokeApiClient\DTO\Pokemon\PokemonDTO;
use App\PokeApiClient\DTO\PokemonSpecies\PokemonSpeciesDTO;
use App\PokeApiClient\DTO\Type\TypeDTO;
use App\Service\DamageMultipliersCalculator;

class PokemonViewModel
{
    private PokemonDTO $pokemon;
    private PokemonSpeciesDTO $species;
    /** @var TypeDTO[] */
    private array $types;
    private EvolutionChainDTO $evolutionChain;
    private DamageMultipliersCalculator $multipliersCalculator;

    public function __construct(array $data)
    {
        $this->pokemon = $data['pokemon'];
        $this->species = $data['species'];
        $this->types = $data['types'];
        $this->evolutionChain = $data['evolutionChain'];
        $this->multipliersCalculator = new DamageMultipliersCalculator();
    }

    public function getId(): int
    {
        return $this->pokemon->id;
    }

    public function getName(): string
    {
        return ucfirst($this->pokemon->name);
    }

    public function getOfficialArtwork(): string
    {
        return $this->pokemon->sprites->other->officialArtwork->frontDefault;
    }

    public function getHeight(): string
    {
        // Convert decimeters to meters
        return number_format($this->pokemon->height / 10, 1).'m';
    }

    public function getWeight(): string
    {
        // Convert hectograms to kilograms
        return number_format($this->pokemon->weight / 10, 1).'kg';
    }

    public function getTypes(): array
    {
        return array_map(
            fn ($slot) => strtoupper($slot->type->name),
            $this->pokemon->types
        );
    }

    public function getDamageMultipliers(): array
    {
        return $this->multipliersCalculator->calculateDamageMultipliers($this->types);
    }

    public function getFlavorText(): string
    {
        foreach ($this->species->flavorTextEntries as $entry) {
            if ('en' === $entry->language->name) {
                return str_replace("\n", ' ', $entry->flavorText);
            }
        }

        return 'No flavor text available.';
    }

    public function getStats(): array
    {
        $stats = [];
        foreach ($this->pokemon->stats as $slot) {
            $statName = ucwords(str_replace('-', ' ', $slot->stat->name));
            $stats[$statName] = $slot->baseStat;
        }

        return $stats;
    }
}
