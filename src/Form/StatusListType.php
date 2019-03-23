<?php

namespace App\Form;

use App\DTO\StatusListDTO;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StatusListType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'statusList',
                CollectionType::class,
                [
                    'allow_delete' => true,
                    'allow_add' => true,
                    'entry_type' => StatusType::class
                ]
            )
            ->add(
                'submit',
                SubmitType::class
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => StatusListDTO::class
        ]);
    }
}
