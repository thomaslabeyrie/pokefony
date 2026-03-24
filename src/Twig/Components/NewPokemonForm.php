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
    public ?int $pokemonId = null;

    public function __construct(
        private readonly PokeApiService $pokeApiService
    )
    {
    }

    protected function instantiateForm(): FormInterface
    {
        $pokemonIdChoices = array_flip(
            array_map(
                fn($entry) => $entry['name'],
                $this->pokeApiService->getAllPokemonNames()
            )
        );

        $possibleAbilities = [];
        $possibleGenders = [];
        if ($this->pokemonId) {
            // Fetch full pokemon data
            $pokemonData = $this->pokeApiService->getFullPokemonData($this->pokemonId);
            dump($pokemonData);

            // Map it to options
            // abilityChoices
            $possibleAbilities = array_flip(
                array_map(
                    fn($entry) => $entry->name,
                    $pokemonData['abilities']
                )
            );

            // genderChoices
            $possibleGenders = GenderEnum::getFromSpecies($pokemonData['species']);
            $possibleGenders =
                array_map(
                    fn($entry) => $entry->name,
                    $possibleGenders
                );

            // movesetChoices
        }


        return $this->createForm(
            type: PokemonType::class,
            data: new Pokemon(),
            options: [
                'pokemon_id_choices' => $pokemonIdChoices,
                'ability_choices' => $possibleAbilities,
                'gender_choices' => $possibleGenders
            ]
        );
    }
}
