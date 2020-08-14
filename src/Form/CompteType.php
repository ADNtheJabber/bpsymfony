<?php

namespace App\Form;

use App\Entity\Compte;
use PhpParser\Node\Stmt\Label;
use Symfony\Component\Form\AbstractType;
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
            ->add('numeroCompte', TextType::class)
            ->add('typeCompte', TextType::class)
            ->add('fraisOuverture', NumberType::class)
            ->add('remuneration', NumberType::class)
            ->add('agios', NumberType::class)
            ->add('dateOuverture', DateType::class)
            ->add('dateDeblocage', DateType::class)
            ->add('solde', NumberType::class)
            ->add('idClientEntreprise', IntegerType::class)
            ->add('idClientPhysique', IntegerType::class)
            ->add('submit', SubmitType::class,['attr'=>['Label' =>'Valider']])
            ->add('reset', ResetType::class,['attr'=>['Label' =>'Annuler']])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Compte::class,
        ]);
    }
}
