<?php

namespace App\Form;

use App\Entity\ClientMoral;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientMoralType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('adresse')
            ->add('tel')
            ->add('email')
            ->add('ninea')
            ->add('registreCommerce')
            ->add('raisonSociale')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ClientMoral::class,
        ]);
    }
}
