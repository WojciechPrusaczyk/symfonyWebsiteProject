<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductAddController extends AbstractController
{
    #[Route('/product/add', name: 'app_product_add')]
    public function index(): Response
    {
        return $this->render('product_add/index.html.twig', [
            'controller_name' => 'ProductAddController',
        ]);
    }
}
