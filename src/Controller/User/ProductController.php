<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/user/product", name="user_product")
     */
    public function index()
    {
        return $this->render('user/product/index.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }
}
