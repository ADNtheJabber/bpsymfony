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
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('tel', IntegerType::class)
            ->add('adresse', TextType::class)
            ->add('email', TextType::class)
            ->add('identifiant', IntegerType::class)
            ->add('salaire', NumberType::class)
            ->add('profession', TextType::class)
            ->add('infosEmployeur', TextareaType::class)
            ->add('submit', SubmitType::class,['attr'=>['label' =>'Valider']])
            ->add('reset', ResetType::class,['attr'=>['label' =>'Annuler']])
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
