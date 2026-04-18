<?php

namespace App\Form;

use App\Entity\Pokemon;
use App\Enum\GenderEnum;
use App\Enum\NatureEnum;
use App\Service\PokeApiService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfonycasts\DynamicForms\DependentField;
use Symfonycasts\DynamicForms\DynamicFormBuilder;

class PokemonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                child: 'pokemonId',
                type: ChoiceType::class,
                options: [
                    'label' => 'Pokémon',
                    'placeholder' => 'Search for a Pokémon',
                    'choices' => $options['pokemon_choices'],
                ]
            )
            ->add(
                child: 'ability',
                type: ChoiceType::class,
                options: [
                    'label' => 'Ability',
                    'placeholder' => 'Select an ability',
                    'choices' => $options['ability_choices'],
                ]
            )
            ->add(
                child: 'nickname',
                type: TextType::class,
                options: [
                    'attr' => ['placeholder' => 'Enter a nickname'],
                ]
            )
            ->add(
                child: 'isShiny',
                type: ChoiceType::class,
                options: [
                    'expanded' => true,
                    'multiple' => true
                ]
            )
            ->add(
                child: 'level',
                type: IntegerType::class,
                options: [
                    'data' => 50
                ]
            )
            ->add(
                child: 'happiness',
                type: IntegerType::class,
            )
            ->add(
                child: 'isShiny',
                type: CheckboxType::class,
                options: [
                    'label' => 'Shiny'
                ]
            )
            ->add(
                child: 'gender',
                type: EnumType::class,
                options: [
                    'class' => GenderEnum::class,
                    'placeholder' => 'Select a gender',
                    'choices' => $options['gender_choices'],
                    'choice_label' => fn(GenderEnum $gender) => $gender->getLabel()
                ]
            )
            ->add(
                child: 'nature',
                type: EnumType::class,
                options: [
                    'class' => NatureEnum::class,
                    'label' => 'Nature',
                    'placeholder' => 'Select a nature'
                ]
            )
            ->add(
                child: 'heldItem',
                type: ChoiceType::class,
                options: [
                    'label' => 'Held item',
                    'choices' => [],
                ]
            )
            ->add(
                child: 'moveset',
                type: MovesetType::class
            )
            ->add(
                child: 'ivs',
                type: IvsType::class,
                options: [
                    'label' => 'IVs'
                ]
            )
            ->add(
                child: 'evs',
                type: EvsType::class,
                options: [
                    'label' => 'EVs'
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
            ->setDefaults([
                'data_class' => Pokemon::class,
                'gender_choices' => [],
                'ability_choices' => [],
                'moveset_choices' => [],
            ])
            ->setRequired([
                'pokemon_choices',
                'gender_choices',
                'ability_choices',
                'moveset_choices'
            ]);
    }
}
