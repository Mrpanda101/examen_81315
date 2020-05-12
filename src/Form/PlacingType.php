<?php

namespace App\Form;

use App\Entity\Placing;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlacingType extends AbstractType
{
    public function getUsername(): string
    {
        return (string) $this->Username;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {



        $builder
            ->add('User')
            ->add('Nr1')
            ->add('Nr2')
            ->add('Nr3')
            ->add('Nr4')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Placing::class,
        ]);
    }
}
