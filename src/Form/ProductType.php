<?php

namespace App\Form;

use App\Entity\Catalog\Product;
use App\Entity\Catalog\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category', EntityType::class, [
                // looks for choices from this entity
                'class' => Category::class,  
                // uses category name as the select option
                'choice_label' => 'name',          
             ])
            ->add('name')
            ->add('excerpt')
            ->add('description')
            ->add('quantity')
            ->add('price')
            //->add('createdAt')  // automated by code
            //->add('editedAt')
            ->add('discount')
            //->add('profile')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
