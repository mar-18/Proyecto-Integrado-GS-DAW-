<?php

namespace App\Form;

use App\Entity\Menu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class MenuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombremenu', TextType::class, ['label' => 'Nombre menú', 'attr' => ['placeholder' => 'nombre', 'required' => true,]])
            ->add('tipomenu', TextType::class, ['label' => 'Menú para: ', 'attr' => ['placeholder' => 'desayuno/comida/cena/tapas', 'required' => true,]])
            ->add('descripcion', CKEditorType::Class)
            ->add('ingredientes', TextType::class, ['label' => 'Ingredientes', 'attr' => ['placeholder' => 'ingredientes', 'required' => true,]])
            ->add('precio', MoneyType::class, ['attr' => ['placeholder' => 'precio', 'type' => 'number', 'required' => true]]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Menu::class,
        ]);
    }
}
