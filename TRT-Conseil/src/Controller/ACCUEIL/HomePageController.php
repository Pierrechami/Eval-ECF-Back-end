<?php

namespace App\Controller\ACCUEIL;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="app")
     */
    public function index(): Response
    {
        return $this->render('home_page/index.html.twig', [

        ]);
    }
}
