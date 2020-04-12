<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    /**
     * @Route("/user/account", name="user_account")
     */
    public function index()
    {
        return $this->render('user/account/index.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }

    /**
     * @Route("/user/login", name="login")
     */
    public function login(Type $request = null)
    {
        # code...
    }

    /**
     * @Route("/user/register", name="register")
     */
    public function register(Type $request = null)
    {
        # code...
    }
}
