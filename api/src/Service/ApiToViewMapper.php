<?php

namespace App\Service;

use App\Enum\TypeEnum;
use App\PokeApiClient\DTO\Common\FlavorTextDTO;
use App\PokeApiClient\DTO\Evolution\ChainLinkDTO;
use App\PokeApiClient\DTO\Evolution\EvolutionChainDTO;
use App\PokeApiClient\DTO\Pokemon\PokemonAbilityDTO;
use App\PokeApiClient\DTO\Pokemon\PokemonDTO;
use App\PokeApiClient\DTO\Pokemon\PokemonStatDTO;
use App\PokeApiClient\DTO\Pokemon\PokemonTypeDTO;
use App\PokeApiClient\DTO\PokemonSpecies\PokemonSpeciesDTO;
use App\PokeApiClient\PokeApiClient;
use App\ViewModel\Common\SpriteViewModel;
use App\ViewModel\Pokedex\ListPageViewModel;
use App\ViewModel\Pokedex\PokedexRowViewModel;
use App\ViewModel\Species\ChainLinkViewModel;
use App\ViewModel\Species\EvolutionDetailViewModel;
use App\ViewModel\Species\FlavorTextViewModel;
use App\ViewModel\Species\PokemonDamageRelationsViewModel;
use App\ViewModel\Species\SpeciesPageViewModel;
use App\ViewModel\Species\StatViewModel;

readonly class ApiToViewMapper
{
    public function __construct(
        private PokeApiClient $pokeApiClient
    )
    {
    }

    /** @param PokemonDTO[] $pokemons */
    public function listPage(array $pokemons): ListPageViewModel
    {
        return new ListPageViewModel(
            rows: array_map(
                fn($pokemon) => $this->pokedexRow($pokemon),
                $pokemons
            ),
        );
    }

    public function speciesPage(
        PokemonDTO        $pokemon,
        PokemonSpeciesDTO $species,
        EvolutionChainDTO $evolutionChain
    ): SpeciesPageViewModel
    {
        return new SpeciesPageViewModel(
            id: $pokemon->id,
            name: $pokemon->name,
            types: array_map(fn($entry) => $entry->type->name, $pokemon->types),
            height: $pokemon->height,
            weight: $pokemon->weight,
            genderRate: $species->genderRate,
            growthRate: $species->growthRate->name,
            baseExperience: $pokemon->baseExperience,
            captureRate: $species->captureRate,
            baseHappiness: $species->baseHappiness,
            sprite: $this->sprite($pokemon),
            damageRelations: $this->damageRelations($pokemon->types),
            flavorText: $this->flavorText($species->flavorTextEntries),
            stats: $this->stats($pokemon->stats),
            abilities: $this->abilities($pokemon->abilities),
            evolutionChain: $this->chainLink($evolutionChain->chain)
        );
    }

    public function chainLink(ChainLinkDTO $chainLink): ChainLinkViewModel
    {
        return new ChainLinkViewModel(
            name: $chainLink->species->name,
            isBaby: $chainLink->isBaby,
            sprite: $this->sprite(
                $this->pokeApiClient->get(PokemonDTO::class, $chainLink->species->name)
            ),
            evolutions: array_map(
                fn($evolution) => $this->chainLink($evolution),
                $chainLink->evolvesTo
            ),
            details: array_map(
                fn($detail) => new EvolutionDetailViewModel(
                    trigger: $detail->trigger->name,
                    item: $detail->item?->name,
                    gender: $detail->gender,
                    heldItem: $detail->heldItem,
                    knownMove: $detail->knownMove,
                    knownMoveType: $detail->knownMoveType?->name,
                    location: $detail->location?->name,
                    minLevel: $detail->minLevel,
                    minHappiness: $detail->minHappiness,
                    minBeauty: $detail->minBeauty,
                    minAffection: $detail->minAffection,
                    needsMultiplayer: $detail->needsMultiplayer,
                    needsOverworldRain: $detail->needsOverworldRain,
                    partySpecies: $detail->partySpecies,
                    partyType: $detail->partyType,
                    relativePhysicalStats: $detail->relativePhysicalStats,
                    timeOfDay: $detail->timeOfDay,
                    tradeSpecies: $detail->tradeSpecies,
                    turnUpsideDown: $detail->turnUpsideDown,
                    region: $detail->region,
                    baseForm: $detail->baseForm,
                    usedMove: $detail->usedMove,
                    minMoveCount: $detail->minMoveCount,
                    minSteps: $detail->minSteps,
                    minDamageTaken: $detail->minDamageTaken,
                ),
                $chainLink->evolutionDetails
            ),
        );
    }

    /**
     * @param PokemonAbilityDTO[] $abilities
     * @return AbilityViewModel[]
     */
    private function abilities(array $abilities): array
    {
        return array_map(
            fn($entry) => new AbilityViewModel(
                name: $entry->ability->name,
                isHidden: $entry->isHidden,
            ),
            $abilities
        );
    }

    /**
     * @param PokemonStatDTO[] $stats
     * @return StatViewModel[]
     */
    private function stats(array $stats): array
    {
        return array_map(
            fn($entry) => new StatViewModel(
                name: $entry->stat->name,
                baseValue: $entry->baseStat,
            ),
            $stats
        );
    }

    /** @var PokemonTypeDTO[] $types */
    private function damageRelations(array $types): PokemonDamageRelationsViewModel
    {
        $typeEnums = array_map(
            fn($entry) => TypeEnum::tryFrom($entry->type->name),
            $types
        );

        $immuneTo = [];
        $veryResistantTo = [];
        $resistantTo = [];
        $neutralTo = [];
        $weakTo = [];
        $veryWeakTo = [];

        foreach (TypeEnum::cases() as $attacker) {
            $multiplier =
                $typeEnums[0]->multiplierAgainst($attacker)
                * (count($typeEnums) > 1 ? $typeEnums[1]->multiplierAgainst($attacker) : 1);

            match (true) {
                $multiplier === 0.0 => $immuneTo[] = $attacker->value,
                $multiplier >= 4 => $veryWeakTo[] = $attacker->value,
                $multiplier >= 2 => $weakTo[] = $attacker->value,
                $multiplier <= 0.25 => $veryResistantTo[] = $attacker->value,
                $multiplier <= 0.5 => $resistantTo[] = $attacker->value,
                default => $neutralTo[] = $attacker->value,
            };
        }

        return new PokemonDamageRelationsViewModel(
            immuneTo: $immuneTo,
            veryResistantTo: $veryResistantTo,
            resistantTo: $resistantTo,
            neutralTo: $neutralTo,
            weakTo: $weakTo,
            veryWeakTo: $veryWeakTo,
        );
    }

    /** @param FlavorTextDTO[] $flavorTexts */
    private function flavorText(array $flavorTexts): FlavorTextViewModel
    {
        $enFlavorText = array_find($flavorTexts, fn($entry) => $entry->language->name === 'en');

        return new FlavorTextViewModel(flavorText: $enFlavorText->flavorText);
    }

    private function pokedexRow(PokemonDTO $pokemon): PokedexRowViewModel
    {
        return new PokedexRowViewModel(
            sprite: $this->sprite($pokemon),
            name: $pokemon->name,
            types: array_map(fn($entry) => $entry->type->name, $pokemon->types),
            pokedexNumber: $pokemon->id + 1,
        );
    }

    private function sprite(PokemonDTO $pokemon): SpriteViewModel
    {
        return new SpriteViewModel(
            url: $pokemon->sprites->other->officialArtwork->frontDefault,
        );
    }
}
