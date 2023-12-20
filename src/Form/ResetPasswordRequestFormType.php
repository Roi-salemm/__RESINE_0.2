<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResetPasswordRequestFormType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        //* Le builder definit l'input, attr = [attribut... ] ...
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Entrez votre email  ',
                'attr' => [
                    'placeholder' => 'example@email.com',
                    'class' => 'form-control'
                ]
            ]);
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }



}
