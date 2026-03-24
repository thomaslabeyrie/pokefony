<?php

namespace App\Form;

use App\Entity\Embeddable\Moveset;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovesetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                child: 'move1',
                type: ChoiceType::class,
                options: [
                    // TODO: Get learnable moves
                    'choices' => [],
                ]
            )
            ->add(
                child: 'move2',
                type: ChoiceType::class,
                options: [
                    // TODO: Get learnable moves
                    'choices' => [],
                ]
            )
            ->add(
                child: 'move3',
                type: ChoiceType::class,
                options: [
                    // TODO: Get learnable moves
                    'choices' => [],
                ]
            )
            ->add(
                child: 'move4',
                type: ChoiceType::class,
                options: [
                    // TODO: Get learnable moves
                    'choices' => [],
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Moveset::class,
        ]);
    }
}
