<?php

namespace App\Controller\CANDIDATE;

use App\Entity\Job;
use App\Form\CandidateJobType;
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
    public function index(JobRepository $jobRepository): Response
    {

        return $this->render('candidate_job/index.html.twig', [
            'jobs' => $jobRepository->findAll(),
        ]);
    }


    /**
     * @Route("/{id}", name="candidate_job_show", methods={"GET"})
     */
    public function show(Job $job): Response
    {
        return $this->render('candidate_job/show.html.twig', [
            'job' => $job,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="candidate_job_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Job $job, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CandidateJobType::class, $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('candidate_job_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('candidate_job/edit.html.twig', [
            'job' => $job,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="candidate_job_delete", methods={"POST"})
     */
    public function delete(Request $request, Job $job, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $job->getId(), $request->request->get('_token'))) {
            $entityManager->remove($job);
            $entityManager->flush();
        }

        return $this->redirectToRoute('candidate_job_index', [], Response::HTTP_SEE_OTHER);
    }
}
