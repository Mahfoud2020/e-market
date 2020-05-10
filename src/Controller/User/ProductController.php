<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Account\Profile;
use App\Entity\Catalog\Product;
use App\Form\ProductType;

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
        /**
     * @Route("/user/product/{id}/new", name="user_product_new")
     */
    public function new(Request $request, $id)
    {
        $profile = $this->getDoctrine()->getRepository(Profile::class)->find($id);
        $product = new Product();
       // set the product properties
        $product->setProfile($profile) ; 
       // create the form and a response to the submission
       $form = $this->createForm(ProductType::class, $product);
       $form->handleRequest($request);
       
       if ($form->isSubmitted() && $form->isValid()) 
       {
         $product->setCreatedAt(new \DateTime());
         $product->setEditedAt(new \DateTime());
         // call the manager to persist
         $entityManager = $this->getDoctrine()->getManager();
         $entityManager->persist($product);
         $entityManager->flush();
         // redirect to login
         return $this->redirectToRoute('user_product');
       }
           
      return $this->render('user/product/product.html.twig', [
         'form' => $form->createView(), 
       ]);
    
    }
    /**
     * @Route("/user/product/edit", name="user_product_edit")
     */
    public function edit()
    {
        return $this->render('user/product/product.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }

}
