<?php

namespace ZanimauxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('id',TextType::class,array('label'=>'CIN'))
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('ville')
            ->add('codePostale')
            ->add('telephone')
            ->add('roles', ChoiceType::class, array('label' => 'Role',
            'choices' => array('Admin'=> 'ROLE_SUPER_ADMIN',
                ' VETERINAIRE' => 'ROLE_VETERINAIRE',
                'CLIENT' => 'ROLE_CLIENT',
                'DRESSEUR' => 'ROLE_DRESSEUR',
                'PROPRIETAIRE MAGASIN' => 'ROLE_PROPRIETAIRE_MAGASIN',
                'PROPRIETAIRE REFUGE' => 'ROLE_PROPRIETAIRE_REFUGE'   ),
            'required' => true, 'multiple' => true,))
            ->add('numeroOrdre', TextType::class, array('label' => 'Numero Odre',
                'required' => true))



        ;
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }



    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }


    public function getBlockPrefix()
    {
        return 'zanimaux_bundle_registration_type';
    }
}
