<?php

namespace App\Form;

use App\Entity\ClientPhysique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientPhysiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'attr'=> [
                    'placeholder'=>'Saisir le nom du client ici '
                ]
            ])
            ->add('prenom', TextType::class, [
                'attr'=> [
                    'placeholder'=>'Saisir le prenom du client ici '
                ]
            ])
            ->add('tel', IntegerType::class, [
                'attr'=> [
                    'placeholder'=>'Saisir le telephone du client ici '
                ]
            ])
            ->add('adresse', TextType::class, [
                'attr'=> [
                    'placeholder'=>'Saisir l\'adresse du client ici '
                ]
            ])
            ->add('email', TextType::class, [
                'attr'=> [
                    'placeholder'=>'Saisir l\'email du client ici '
                ]
            ])
            ->add('cni', IntegerType::class, [
                'attr'=> [
                    'placeholder'=>'Saisir le cni du client ici '
                ]
            ])
            ->add('salaire', NumberType::class, [
                'attr'=> [
                    'placeholder'=>'Saisir le salaire du client ici ',
                    'id'=>'salaire'
                ]
            ])
            ->add('profession', TextType::class, [
                'attr'=> [
                    'placeholder'=>'Saisir la profession du client ici ',
                    'id'=>'profession'
                ]
            ])
            ->add('infos_employeur', TextareaType::class, [
                'attr'=> [
                    'placeholder'=>'Saisir les informations de l\'employeur ici ',
                    'id'=>'infos'
                ]
            ])
            ->add('Valider', SubmitType::class, [
                'attr'=> [
                    'class' =>'btn btn-success btn-block'
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
            'data_class' => ClientPhysique::class,
            //'attr' => [
              //  'data-autocomplete' => $this->router->generate('results')
           // ]
        ]);
    }
}




