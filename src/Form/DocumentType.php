<?php

namespace App\Form;

use App\Entity\Document;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class DocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDocument', DateType::class)
            ->add('designation', ChoiceType::class, [
                'choices' => [
                    'Assurance' => "Assurance",
                    'Eau' => "Facture d'Eau",
                    'EDF' => "Facture EDF",
                    'Gaz' => "Facture de Gaz",
                    'Taxe Habitation' => "Taxe d'habitation",
                    'Taxe Foncière' => "Taxe foncière",
                    'Autres' => "Autres",
                    'Facture' => "Autre facture",
                    'Avoir' => "Avoir Divers",
                    'Document' => "Document"
                ]
             ])
            ->add('dateDeadline', DateType::class)
            ->add('amount')
            ->add('url')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Document::class,
        ]);
    }
}
