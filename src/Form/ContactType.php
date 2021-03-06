<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class, [
                'label' => 'Nom',
            ])
            ->add('prenom',TextType::class, [
                'label' => 'Prénom',
            ])
            ->add('objet',TextType::class, [
                'label' => 'Objet',
            ])
            ->add('email',EmailType::class, [
                'label' => 'E-mail'
            ])
            ->add('message', TextareaType::class, [
                'attr' => ['rows' => 5],
            ])
            ->add('envoyer', SubmitType::class, [
                'attr' => ['class' => 'btn-vert-connexion_Samm ']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}