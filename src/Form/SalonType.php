<?php

namespace App\Form;

use App\Entity\Salon;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
//para subir archivos FileType
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SalonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombresalon', TextType::class, ['label' => 'Nombre del salón', 'attr' => ['placeholder' => 'nombre', 'required' => true,]])
            ->add('capacidad')
            ->add(
                'foto',
                FileType::class,
                [
                    'mapped' => false,
                    'required' => false,
                    'constraints' => [new File([
                        'mimeTypes' => ['image/png', 'image/jpeg', 'image/gif'],
                        'mimeTypesMessage' => 'Solo se permiten imagenes'
                    ])],
                    'attr' => ['onchange' => 'onChange(ev)', 'id' => 'salon_foto', 'placeholder' => 'seleccione foto', 'type' => 'file'],

                ]
            )
            ->add('precio', MoneyType::class, ['attr' => ['placeholder' => 'precio', 'type' => 'number', 'required' => true]])
            ->add('decoracionIddecoracion');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Salon::class,
        ]);
    }
}
