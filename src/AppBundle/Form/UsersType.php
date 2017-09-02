<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class UsersType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username', TextType::class, array('label' => 'form-username', 
                    'attr' => array('placeholder' => 'you-username',)))
                ->add('email', EmailType::class, array('label' => 'form-email',
                    'attr' => array('placeholder' => 'you-email',)))

                ->add('plainPassword', RepeatedType::class, array(
                    'type' => PasswordType::class,
                    'first_options'  => array('label' => 'form-pass',
                    'attr' => array('placeholder' => 'you-pass',)),
                    'second_options' => array('label' => 'form-pass-repeat',
                    'attr' => array('placeholder' => 'you-pass-repeat',)),
                    ))
                ->add('save', SubmitType::class, array('label' => 'form-save'))
                ->add('clear', ResetType::class, array('label' => 'form-clear'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Users'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'AppBundle_users';
    }
}
