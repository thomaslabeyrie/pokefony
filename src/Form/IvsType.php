<?php

namespace App\Form;

use App\Entity\Embeddable\IVs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IvsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                child: 'hp',
                type: IntegerType::class
            )
            ->add(
                child: 'atk',
                type: IntegerType::class
            )
            ->add(
                child: 'def',
                type: IntegerType::class
            )
            ->add(
                child: 'spAtk',
                type: IntegerType::class
            )
            ->add(
                child: 'spDef',
                type: IntegerType::class
            )
            ->add(
                child: 'speed',
                type: IntegerType::class
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => IVs::class,
        ]);
    }
}
