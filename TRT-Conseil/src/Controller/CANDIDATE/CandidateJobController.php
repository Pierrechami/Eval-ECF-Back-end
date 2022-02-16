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
    public function index(JobRepository $jobRepository, CandidateRepository $candidateRepository ): Response
    {


        return $this->render('candidate_job/index.html.twig', [
            'jobs' => $jobRepository->findAll(),
        ]);
    }




    /**
     * @Route("/{id}/edit", name="candidate_job_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Job $job, EntityManagerInterface $entityManager, CandidateRepository $candidateRepository): Response
    {

        $userid = $this->getUser()->getId(); // id 4
        $candidate = $candidateRepository->findBy(['user' => ['id' => $userid]])[0];

        $form = $this->createForm(CandidateJobType::class, $job);
        $form->handleRequest($request);


        $job->addCandidate($candidate);
        $candidate->addApplyJob($job);

        // Si le formulaire est valide et que le candidate a postuler
        if ($form->isSubmitted() && $form->isValid() && $job->getToApply() == true) {

            $entityManager->flush();

            $this->addFlash('success', 'Félicitation ! vous venez de postuler à l\'offre "' . $job->getTitle() . '"');

            return $this->redirectToRoute('candidate_job_index', [], Response::HTTP_SEE_OTHER);
        }


        // Si le formulaire est valide mais que  le candidate n'a pas postulé
        if ($form->isSubmitted() && $form->isValid() && $job->getToApply() == false) {
            $job->removeCandidate($candidate);
            $entityManager->flush();

            return $this->redirectToRoute('candidate_job_index', [], Response::HTTP_SEE_OTHER);

        }


        return $this->renderForm('candidate_job/edit.html.twig', [
            'job' => $job,
            'form' => $form,
        ]);
    }


}
