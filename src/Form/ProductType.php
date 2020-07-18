<?php

namespace App\Form;

use App\Entity\Catalog\Product;
use App\Entity\Catalog\Category;
<<<<<<< HEAD
use App\Entity\Catalog\Specific;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
=======
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
>>>>>>> 2506da363d933cc0e4c02d3ae1bbb06b2d45961e
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
<<<<<<< HEAD
            ->add('category',EntityType::class, [
=======
            ->add('category', EntityType::class, [
>>>>>>> 2506da363d933cc0e4c02d3ae1bbb06b2d45961e
                // looks for choices from this entity
                'class' => Category::class,  
                // uses category name as the select option
                'choice_label' => 'name',          
             ])
            ->add('name')
            ->add('excerpt')
            ->add('description')
<<<<<<< HEAD
            //->add('specifics', SpecificsType::class, [
            //        'data_class' => null,])
=======
>>>>>>> 2506da363d933cc0e4c02d3ae1bbb06b2d45961e
            ->add('quantity')
            ->add('price')
            //->add('createdAt')  // automated by code
            //->add('editedAt')
<<<<<<< HEAD
            ->add('discount');
            //->add('specifics')

=======
            ->add('discount')
            //->add('profile')
>>>>>>> 2506da363d933cc0e4c02d3ae1bbb06b2d45961e
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
