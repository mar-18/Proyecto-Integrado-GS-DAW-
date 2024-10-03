<?php

namespace App\Form;

use App\Entity\Evento;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType as TypeDateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class EventoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipo', TextType::class, ['label' => 'Tipo de evento:', 'attr' => ['placeholder' => 'boda/cumple/gradua/conferencia', 'required' => true]])
            ->add('descripcion', CKEditorType::Class)
            ->add('fecha', TypeDateType::class, [
                'widget' => 'choice',
            ])
            ->add('hora', TimeType::class, [
                'input'  => 'datetime',
                'widget' => 'choice',
            ])
            ->add('asistentes', IntegerType::class)
            ->add('salonIdsalon', EntityType::class, ['label' => 'Salón', 'class' => 'App:Salon'])
            ->add('menuIdmenu', EntityType::class, ['label' => 'Menú', 'class' => 'App:Menu']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Evento::class,
        ]);
    }
}
