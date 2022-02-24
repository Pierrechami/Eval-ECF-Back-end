<?php

namespace App\Controller\ACCUEIL;

use App\Repository\JobRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="app")
     */
    public function index(JobRepository $jobRepository, Request $request): Response
    {


        return $this->render('home_page/index.html.twig', [
            'jobs' => $jobRepository->findAll(),
        ]);
    }

    /**
     * @Route("/search-results-accueil", name="search-accueil")
     */
    public function searchArticle(Request $request, JobRepository $jobRepository)
    {
        //Récupérer les données de la recherche

        $search = $request->query->get('search');

        // Faire la recherche sur les donnée de la requete

        $jobs = $jobRepository->searchJob($search);


        return $this->render('home_page/accueil.html.twig', [
            'jobs' => $jobs,
            'search' => $search,

        ]);
    }
}
