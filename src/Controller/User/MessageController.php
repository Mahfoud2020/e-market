<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    /**
     * @Route("/user/message", name="user_message")
     */
    public function index()
    {
        return $this->render('user/message/index.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }
}
