<?php

namespace App\Controller\Store;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @Route("/store/cart", name="store_cart")
     */
    public function index()
    {
        return $this->render('store/cart/index.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }

    /**
     * @Route("/store/checkout", name="store_checkout")
     */
    public function checkout()
    {
        return $this->render('store/cart/checkout.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }
}
