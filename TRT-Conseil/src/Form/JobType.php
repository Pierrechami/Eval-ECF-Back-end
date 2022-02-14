<?php

namespace App\Form;

use App\Entity\Job;
use App\Repository\JobRepository;
use App\Repository\RecruiterRepository;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {


        $builder
            ->add('title', TextType::class, [
                'label' => 'Nom du poste : ',
            ])
            ->add('type_contrat', ChoiceType::class, [
                'multiple' => false,
                'choices' => [
                    'CDI' => 'CDI',
                    'CDD' => 'CDD',
                    'INTERIM' => 'INTERIM'
                ]
            ])
            ->add('start_date', DateType::class, [
                'widget' => 'choice',
                'label' => 'Date de début : ',
                'data' => new \DateTime("now")
            ])
            ->add('end_date', null, [
                'label' => 'Date de fin : *si le contrat n\'a pas de date de fin, laissez les valeurs vide.'
            ])
            ->add('time', IntegerType::class, [
                'label' => 'Nombre d\'heures semaine : '
            ])
            ->add('salary', IntegerType::class, [
                'label' => 'Salaires mensuel : '
            ])
            #  ->add('to_apply', null, [
            #   'label' => 'Postuler à l'\offre '
            # ])
           # ->add('is_accepted', null, [
         #       'label' => 'Accepter l\'offre : '
         #   ])
         #  ->add('recruiter')
            ##  ->add('candidates')
        ;


    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Job::class,
        ]);
    }
}
