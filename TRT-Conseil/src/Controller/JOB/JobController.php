<?php

namespace App\Controller\JOB;

use App\Entity\Job;
use App\Entity\Recruiter;
use App\Form\JobType;
use App\Repository\JobRepository;
use App\Repository\RecruiterRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @Route("recruiter/job")
 */
class JobController extends AbstractController
{
    /**
     * @Route("/", name="job_index", methods={"GET"})
     */
    public function index(JobRepository $jobRepository, RecruiterRepository $recruiterRepository): Response
    {

        $user = $this->getUser()->getIsAccepted();

        if ($user == false) {
            $this->addFlash('erreur_autorisation_recruiter', 'Votre compte "'. $this->getUser()->getUserIdentifier() . '" n\'a pas encore été accepté. Nos équipe font au plus vite pour valider votre demande !');
            return $this->redirectToRoute('app');
        }

                //récupére l'utilisateur courant
        $utilisateur = $this->getUser();

                // Récupère l'id de l'utilisateur courant
        $iduser = $this->getUser()->getId();

                //récupére le recruiter/entreprise faisant réfèrence a l'User
        $recruiteur = $recruiterRepository->findBy(['user' => ['id' => $iduser]]);



                //  récupérer tout les job faisant référence a l'id du recruteur
         $jobReferenceIdRecruteur = $jobRepository->findBy(['recruiter'=> $recruiteur]);

        return $this->render('job/index.html.twig', [
            'jobs' => $jobReferenceIdRecruteur,
        ]);
    }

    /**
     * @Route("/new", name="job_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, RecruiterRepository $recruiterRepository): Response
    {

        $user = $this->getUser()->getIsAccepted();

        if ($user == false) {
            $this->addFlash('erreur_autorisation_recruiter', 'Votre compte "'. $this->getUser()->getUserIdentifier() . '" n\'a pas encore été accepté. Nos équipe font au plus vite pour valider votre demande !');
            return $this->redirectToRoute('app');
        }

        //récupére l'utilisateur courant
       $utilisateur = $this->getUser();

        // Récupère l'id de l'utilisateur courant
        $iduser = $this->getUser()->getId();

        //récupére le recruiter/entreprise faisant réfèrence a l'User
        $recruiteur = $recruiterRepository->findBy(['user' => ['id' => $iduser]]);


        if ($recruiteur == []) {
            return  $this->redirectToRoute('recruiter_new');
        }



        $job = new Job();
        $job->setRecruiter($recruiteur[0]);
        $form = $this->createForm(JobType::class, $job);
        $form->handleRequest($request);
        $job->setIsAccepted(false);


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($job);
            $entityManager->flush();

            return $this->redirectToRoute('job_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('job/new.html.twig', [
            'job' => $job,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="job_show", methods={"GET"})
     */
    public function show(Job $job): Response
    {
        $userid = $this->getUser()->getId();
        $jobIdUser = $job->getRecruiter()->getUser()->getId();

        // Empêche un autre recruiter de supprimer un job qui n'est pas a lui
        if ($userid !== $jobIdUser) {
            return $this->redirectToRoute('app');
        }

        return $this->render('job/show.html.twig', [
            'job' => $job,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="job_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Job $job, EntityManagerInterface $entityManager): Response
    {
        $userid = $this->getUser()->getId();
        $jobIdUser = $job->getRecruiter()->getUser()->getId();

        // Empêche un autre recruiter de pouvoir modifier le job d'un autre
        if ($userid !== $jobIdUser) {
            return $this->redirectToRoute('app');
        }

        $form = $this->createForm(JobType::class, $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('job_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('job/edit.html.twig', [
            'job' => $job,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="job_delete", methods={"POST"})
     */
    public function delete(Request $request, Job $job, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $job->getId(), $request->request->get('_token'))) {
            $entityManager->remove($job);
            $entityManager->flush();
        }

        return $this->redirectToRoute('job_index', [], Response::HTTP_SEE_OTHER);
    }

}
