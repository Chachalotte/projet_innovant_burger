<?php
// src/Form/SearchForm.php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Repository\IngredientsRepository;
use App\Entity\Ingredients;

use Doctrine\ORM\EntityRepository;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class SearchForm extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
      $builder
  
        ->add('pain', EntityType::class, [
          'class' => Ingredients::class,
          'query_builder' => function (IngredientsRepository $ir) {
            return $ir->createQueryBuilder('i')
                ->where("i.type = 'pain' ")
                ->orderBy('i.nom_ingredient', 'ASC');
                
        },
        'label' => false,
        'placeholder' => 'Type'

        ])

        ->add('viande', EntityType::class, [
          'class' => Ingredients::class,
          'query_builder' => function (IngredientsRepository $ir) {
            return $ir->createQueryBuilder('i')
                ->where("i.type = 'viande' ")
                ->orderBy('i.nom_ingredient', 'ASC');
                
        },
        'label' => false,
        'placeholder' => 'Type'

        ])

        ->add('fromage', EntityType::class, [
          'class' => Ingredients::class,
          'query_builder' => function (IngredientsRepository $ir) {
            return $ir->createQueryBuilder('i')
                ->where("i.type = 'fromage' ")
                ->orderBy('i.nom_ingredient', 'ASC');
                
        },
        'label' => false,
        'placeholder' => 'Type'

        ])

        ->add('sauce', EntityType::class, [
          'class' => Ingredients::class,
          'query_builder' => function (IngredientsRepository $ir) {
            return $ir->createQueryBuilder('i')
                ->where("i.type = 'sauce' ")
                ->orderBy('i.nom_ingredient', 'ASC');
                
        },
        'label' => false,
        'placeholder' => 'Type'

        ])
        ->add('send', SubmitType::class); // We could have added it in the view, as stated in the framework recommendations
  }
}