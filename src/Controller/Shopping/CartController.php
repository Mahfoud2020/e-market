<?php

namespace App\Controller\Shopping;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart")
     */
    public function index()
    {
        return $this->render('Shopping/cart/index.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }

    /**
     * @Route("/checkout", name="checkout")
     */
    public function checkout()
    {
        return $this->render('Shopping/cart/checkout.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }
}
