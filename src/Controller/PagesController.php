<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('pages/index.html.twig');
    }

    /**
     * @Route("/coffee")
     */
    public function coffee()
    {
        return $this->render('pages/coffee.html.twig');
    }

    /**
     * @Route("/flowers")
     */
    public function flowers()
    {
        return $this->render('pages/flowers.html.twig');
    }

    /**
     * @Route("/courier")
     */
    public function courier()
    {
        return Response::create('Courier info');
    }
}