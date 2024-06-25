<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class FinanzFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('vorgangsart', ChoiceType::class, [
                'choices' => [
                    'Transportrechnung' => 'transportrechnung',
                    'Transportgutschrift' => 'transportgutschrift',
                ],
                'required' => false,
                'placeholder' => 'Show all',
            ]);
    }
}
