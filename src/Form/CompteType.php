<?php

namespace App\Form;

use App\Entity\Compte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeCompte', ChoiceType::class, [
                'choices'=> [
                    'Type de Compte*'=>'',
                    'Courant'=>'1',
                    'Epargne'=>'2',
                    'Bloqué'=>'3'
                ],
                'required'=>'required',
                'choice_attr'=>[
                    'typeCompte*'=>[
                        'disabled'=>'']
                ]
            ])
            ->add('numeroCompte', TextType::class, [
                'attr'=> [
                    'placeholder'=>'Saisir le numero du compte'
                ]
            ])
            ->add('fraisOuverture', NumberType::class, [
                'attr'=> [
                    'placeholder'=>'frais d\'Ouverture'
                ]
            ])
            ->add('remuneration', NumberType::class, [
                'attr'=> [
                    'placeholder'=>'Remuneration'
                ]
            ])
            ->add('agios', NumberType::class, [
                'attr'=> [
                    'placeholder'=>'agios'
                ]
            ])
            ->add('dateOuverture', DateType::class, [
                'attr'=> [
                    'id'=>'dateOuverture'
                ]
            ])
            ->add('dateDeblocage', DateType::class, [
                'attr'=> [
                    'id'=>'dateDeblocage'
                ]
            ])
            ->add('solde', NumberType::class, [
                'attr'=> [
                    'placeholder'=>'Depot Initial'
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
            'data_class' => Compte::class,
        ]);
    }
}
