<?php

namespace App\Form;

use App\Entity\ClientMoral;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientMoralType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'attr'=> [
                    'placeholder'=>'Saisir le nom ici '
                ]
            ])
            ->add('adresse', TextType::class, [
                'attr'=> [
                    'placeholder'=>'Saisir l\'adresse ici '
                ]
            ])
            ->add('tel', TextType::class, [
                'attr'=> [
                    'placeholder'=>'Saisir le telephone ici '
                ]
            ])
            ->add('email', TextType::class, [
                'attr'=> [
                    'placeholder'=>'Saisir l\'email ici '
                ]
            ])
            ->add('ninea', IntegerType::class, [
                'attr'=> [
                    'placeholder'=>'Saisir le ninea ici '
                ]
            ])
            ->add('registreCommerce', TextType::class, [
                'attr'=> [
                    'placeholder'=>'Saisir le numero de Registre ici '
                ]
            ])
            ->add('raisonSociale', TextType::class, [
                'attr'=> [
                    'placeholder'=>'SA, SARL, SAS ... '
                ]
            ])
            ->add('Valider', SubmitType::class,[
                'attr'=> [
                    'class'=>'btn btn-success btn-block'
                ]
            ])
            ->add('Annuler', ResetType::class, [
                'attr'=> [
                    'class' =>'btn btn-danger btn-block'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ClientMoral::class,
        ]);
    }
}
