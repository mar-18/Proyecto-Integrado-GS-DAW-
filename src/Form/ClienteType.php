<?php

namespace App\Form;

use App\Entity\Cliente;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClienteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class, ['attr' => ['placeholder' => 'nombre', 'required' => true]])
            ->add('apellido', TextType::class, ['attr' => ['placeholder' => 'apellido', 'required' => true]])
            ->add('email', EmailType::class, ['attr' => ['placeholder' => 'email', 'required' => true]])
            ->add('telefono', TelType::class, ['attr' => ['placeholder' => 'telefono', 'required' => true]])
            ->add('direccion', TextType::class, ['attr' => ['placeholder' => 'direccion', 'required' => true]])
            ->add('eventoIdevento1');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cliente::class,
        ]);
    }
}
