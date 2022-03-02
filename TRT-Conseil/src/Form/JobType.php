<?php

namespace App\Form;

use App\Entity\Job;
use App\Repository\JobRepository;
use App\Repository\RecruiterRepository;
use Doctrine\DBAL\Types\StringType;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
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
            ->add('place', TextType::class, [
                'label' => 'Lieu : '
            ])
            ->add('description', TextareaType::class, [
                'label' => 'description du poste : '
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
                'label' => 'Date de début : (Jours - Mois - Années)',
                'view_timezone' => 'Europe/Paris',
                'data' => new \DateTime("now"),
                'format'    => 'ddMyyyy',


            ])
            ->add('end_date', DateType::class, [
                'label' => 'Date de fin : (Jours - Mois - Années)  *si le contrat n\'a pas de date de fin, laissez les valeurs vide.',
                'view_timezone' => 'Europe/Paris',
                'data' => new \DateTime("now"),
                'format'    => 'ddMyyyy',

            ])
            ->add('time', IntegerType::class, [
                'label' => 'Nombre d\'heures semaine : ',
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
