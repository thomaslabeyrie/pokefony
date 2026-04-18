<?php

namespace App\Twig\Components;

use App\Entity\Pokemon;
use App\Enum\GenderEnum;
use App\Form\PokemonType;
use App\Service\PokeApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\ComponentWithFormTrait;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
class NewPokemonForm extends AbstractController
{
    use DefaultActionTrait;
    use ComponentWithFormTrait;

    #[LiveProp(writable: true)]
    public ?string $currentPokemon = null;

    #[LiveProp(writable: true)]
    public ?bool $isShiny = false;

    #[LiveProp(writable: true)]
    public ?string $spriteUrl = 'https://www.pngall.com/wp-content/uploads/4/Pokemon-Pokeball-PNG-File.png';

    public function __construct(
        private readonly PokeApiService $pokeApiService
    )
    {
    }

    protected function instantiateForm(): FormInterface
    {
        $pokemonNames = $this->pokeApiService->getAllPokemonNames();

        $pokemonChoices = array_combine(
            array_map(fn($entry) => ucwords($entry['name']), $pokemonNames),
            array_map(fn($entry) => $entry['name'], $pokemonNames)
        );

        $possibleAbilities = [];
        $possibleGenders = [];
        if ($this->currentPokemon) {
            $pokemonData = $this->pokeApiService->getFullPokemonData($this->currentPokemon);

            $possibleAbilities = array_flip(
                array_map(
                    fn($entry) => ucwords(str_replace('-', ' ', $entry->ability->name)),
                    $pokemonData['pokemon']->abilities
                )
            );
            $possibleGenders = GenderEnum::getFromSpecies($pokemonData['species']);

            $this->spriteUrl = $this->isShiny ?
                $pokemonData['pokemon']->sprites->other->officialArtwork->frontShiny
                : $pokemonData['pokemon']->sprites->other->officialArtwork->frontDefault;

            // movesetChoices
        }

        return $this->createForm(
            type: PokemonType::class,
            data: new Pokemon(),
            options: [
                'pokemon_choices' => $pokemonChoices,
                'ability_choices' => $possibleAbilities,
                'gender_choices' => $possibleGenders
            ]
        );
    }
}
