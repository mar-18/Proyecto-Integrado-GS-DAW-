<?php

namespace App\Form;

use App\Entity\Empleado;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class EmpleadoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class, ['attr' => ['placeholder' => 'nombre', 'required' => true]])
            ->add('apellido', TextType::class, ['attr' => ['placeholder' => 'apellido', 'required' => true]])
            ->add('edad', IntegerType::class, ['attr' => ['placeholder' => 'edad', 'required' => true]])
            ->add('telefono', TelType::class, ['attr' => ['placeholder' => 'telefono', 'required' => true]])
            ->add('direccion', TextType::class, ['attr' => ['placeholder' => 'direccion', 'required' => true]])
            ->add('user');
            /*->add('user', EntityType::class, ['label' => 'Usuario', 'class' => User::class])*/;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Empleado::class,
        ]);
    }
}
