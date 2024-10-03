<?php

namespace App\Form;

use App\Entity\Decoracion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DecoracionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombredecoracion', TextType::class, ['label' => 'Nombre de la decoración', 'attr' => ['placeholder' => 'nombre', 'required' => true,]])
            ->add('tipodecoracion', TextType::class, ['label' => 'Decoración para:', 'attr' => ['placeholder' => 'boda/cumple/gradua/conferencia', 'required' => true]])
            ->add('precio', MoneyType::class, ['attr' => ['placeholder' => 'precio', 'type' => 'number', 'required' => true]]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Decoracion::class,
        ]);
    }
}
