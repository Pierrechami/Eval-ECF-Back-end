<?php

namespace App\Form;

use App\Entity\Candidate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class CandidateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('first_name', TextType::class , [
                'label' => 'Prénom : '
            ])
            ->add('name', TextType::class , [
                'label' => 'Nom : '
            ])
            ->add('imageFile', FileType::class, [
                'mapped' => false,
                'label'=>'Insérez votre CV au format PDF ',
            #    'data_class' => null,
                'constraints' => [
                    new File([
                        'maxSize' => '4096k',
                        'mimeTypes' => [
                            'image/pdf',
                            'image/x-pdf',
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image PDF valide',
                    ])
                ]
            ])
        #    ->add('user')
          #  ->add('apply_job')
            #  ->add('cv')

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidate::class,
        ]);
    }
}
