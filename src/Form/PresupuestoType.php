<?php

namespace App\Form;

use App\Entity\Presupuesto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType as TypeDateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;

class PresupuestoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('fechaDeEvento', TypeDateType::class, [
                'attr' => ['class' => 'form-control', 'name' => "fecha", "id" => "fechaT"],
            ])

            ->add(
                'Buscar',
                SubmitType::class,
                ['attr' => ['id' => 'buscar']],
                ['label' => 'Buscar']
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Presupuesto::class,
        ]);
    }
}
