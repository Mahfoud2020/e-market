<?php

namespace App\Controller\Store;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/store/products", name="store_products")
     */
    public function index()
    {
        return $this->render('store/product/index.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }

    /**
     * @Route("/store/product", name="store_product")
     */
    public function product()
    {
        return $this->render('store/product/product.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }
}
