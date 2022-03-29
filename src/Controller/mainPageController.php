<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class mainPageController extends AbstractController{
    /*
     * Route("/", name="main_page")
     */
    public function index() :Response
    {


        return $this->render('index.html.twig');
    }
}