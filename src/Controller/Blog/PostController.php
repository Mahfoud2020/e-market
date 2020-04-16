<?php

namespace App\Controller\Blog;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/posts", name="posts")
     */
    public function index()
    {
        return $this->render('blog/post/index.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }

    /**
     * @Route("/post", name="post")
     */
    public function post()
    {
        return $this->render('blog/post/post.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }
}
