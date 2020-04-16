<?php

namespace App\Controller\Shopping;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/products", name="products")
     */
    public function index()
    {
        return $this->render('Shopping/product/index.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }

    /**
     * @Route("/product", name="product")
     */
    public function product()
    {
        return $this->render('Shopping/product/product.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }
}
