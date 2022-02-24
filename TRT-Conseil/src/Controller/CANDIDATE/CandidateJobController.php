<?php

namespace App\Controller\CANDIDATE;

use App\Entity\Candidate;
use App\Entity\Job;
use App\Form\CandidateJobType;
use App\Repository\CandidateRepository;
use App\Repository\JobRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/candidate/job")
 */
class CandidateJobController extends AbstractController
{


    /**
     * @Route("/liste", name="candidate_job_index", methods={"GET"})
     */
    public function index(JobRepository $jobRepository, CandidateRepository $candidateRepository): Response
    {
        $user = $this->getUser()->getIsAccepted();

        if ($user == false) {
            $this->addFlash('erreur_autorisation_candidat', 'Votre compte "'. $this->getUser()->getUserIdentifier() . '" n\'a pas encore été accepté. Nos équipe font au plus vite pour valider votre demande !');
            return $this->redirectToRoute('app');
        }


        return $this->render('candidate_job/index.html.twig', [
            'jobs' => $jobRepository->findAll(),
        ]);
    }


    /**
     * @Route("/{id}/edit", name="candidate_job_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Job $job, EntityManagerInterface $entityManager, CandidateRepository $candidateRepository): Response
    {

        $userid = $this->getUser()->getId();

        if ($candidateRepository->findBy(['user' => ['id' => $userid]]) == []){
            $this->addFlash('error' , 'Vous devez finaliser votre compte pour pouvoir postuler a une offre' );
            return $this->redirectToRoute('candidate_new');
        }



        $candidate = $candidateRepository->findBy(['user' => ['id' => $userid]])[0];
        $form = $this->createForm(CandidateJobType::class, $job);
        $form->handleRequest($request);
        $job->addCandidate($candidate);
        $candidate->addApplyJob($job);

/*

A VOIR POUR DIRE QUE LE CANDIDAT A DEJA POSTULER A UNE OFFRE

Mais je ne sais pas encore si c une bonne idée de faire ça...........

        $nameJob = $job->getTitle();  // serveur
        $nameCandidat = $candidate->getName(); // candidatechaminade
        $Nomtt = $nameJob . $nameCandidat;
       // dd($job.$candidate);

        // Renvoi un message pour dire que le candidat a déjà postuler à cette offre
        if ($form->isSubmitted() && $form->isValid() && $job.$candidate == $Nomtt) {

            $this->addFlash('error', 'Vous avez déjà postulé a l\'offre ' .$job->getTitle() .'.');

           return $this->redirectToRoute('candidate_job_index', [], Response::HTTP_SEE_OTHER);
        }
 */
        // Si le formulaire est valide et que le candidate a postuler
        if ($form->isSubmitted() && $form->isValid() && $job->getToApply() == true) {

            $entityManager->flush();

            $this->addFlash('success', 'Félicitation ! vous venez de postuler à l\'offre "' . $job->getTitle() . '", quand votre candidature aura été acceptée par nos équipes, l\'entreprise recevra un mail avec vos informations.');


            return $this->redirectToRoute('candidate_job_index', [], Response::HTTP_SEE_OTHER);
        }


        // Si le formulaire est valide mais que  le candidate n'a pas postulé
        if ($form->isSubmitted() && $form->isValid() && $job->getToApply() == false) {
            $job->removeCandidate($candidate);
            $entityManager->flush(); // VOIR POUR SUPPRIMER LE FLUSH

            return $this->redirectToRoute('candidate_job_index', [], Response::HTTP_SEE_OTHER);

        }


        return $this->renderForm('candidate_job/edit.html.twig', [
            'job' => $job,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/search-results", name="search")
     */
    public function searchArticle(Request $request, JobRepository $jobRepository)
    {
        //Récupérer les données de la recherche

        $search = $request->query->get('search');

        // Faire la recherche sur les donnée de la requete

        $jobs = $jobRepository->searchJob($search);


        return $this->render('candidate_job/search.html.twig', [
            'jobs' => $jobs,
            'search' => $search,

        ]);
    }


    /**
     * @Route("/to-apply", name="to_apply")
     */
    public function toApply(CandidateRepository $candidateRepository):Response
    {

        $user = $this->getUser()->getIsAccepted();

        if ($user == false) {
            $this->addFlash('erreur_autorisation_candidat', 'Votre compte "'. $this->getUser()->getUserIdentifier() . '" n\'a pas encore été accepté. Nos équipe font au plus vite pour valider votre demande !');
            return $this->redirectToRoute('app');
        }


        $userId = $this->getUser()->getId();

        $candidat = $candidateRepository->findBy(['user' => ['id'=>$userId]])[0];

        $jobCandidate = $candidat->getApplyJob();


// faire pareil pour le job
        // dans les parametre de mon controller JobRepository $jobRepository,
   //     $jobs = $jobRepository->findAll();
       // dd($jobs);
        // récupere un job

     //   $job0 = $jobRepository->find(68);
     //   $jobsCandidates = $job0->getCandidates();

        return $this->render('candidate_job/toApply.html.twig', [
            'jobcandidates' => $jobCandidate, // retour tous les job du candidat auquel il a postulé
          //  'job0' => $jobsCandidates
        ]);
    }

}
