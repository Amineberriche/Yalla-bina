<?php

namespace App\Form;

use App\Entity\Traget;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TragetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('depart', TextType::class)
            ->add('arrivee', TextType::class)
            ->add('passager', NumberType::class)
            ->add('date_depart', DateType::class, [
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd',
                ])
            ->add('prix')
            ->add('heure_depart' , TimeType::class)
            ->add('heure_arrivee' , TimeType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Traget::class,
        ]);
    }
}
