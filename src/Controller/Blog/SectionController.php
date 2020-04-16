<?php

namespace App\Controller\Blog;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SectionController extends AbstractController
{
    /**
     * @Route("/section", name="section")
     */
    public function index()
    {
        return $this->render('blog/section/index.html.twig', [
            'controller_name' => 'SectionController',
        ]);
    }
}
