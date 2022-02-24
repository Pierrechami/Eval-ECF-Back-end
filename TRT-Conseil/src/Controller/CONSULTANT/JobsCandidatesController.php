<?php

namespace App\Controller\CONSULTANT;

use App\Entity\Candidate;
use App\Entity\Job;
use App\Form\CandidateJobType;
use App\Repository\JobRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/consultant")
 */
class JobsCandidatesController extends AbstractController
{

    /**
     * @Route("/to-apply-job-consultant" , name="to_apply_job")
     */
    public function toApplyConsulant(JobRepository $jobRepository): Response
    {

        return $this->render('User/toApplyJobConsultant.html.twig', [
            'jobs' => $jobRepository->findAll(),
        ]);
    }


    /**
     * @Route("/{id}/edit/{cid}", name="approving_candidate_job_edit", methods={"GET", "POST"})
     */
    public function Approving(Candidate $cid, Request $request, Job $job, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {


        $form = $this->createForm(CandidateJobType::class, $job);
        $form->handleRequest($request);
        $job->addCandidate($cid);
        $cid->addApplyJob($job);


        if ($form->isSubmitted() && $form->isValid() && $job->getToApply() == true) {


            $entityManager->flush();

            $email = (new Email());
            $email->from('chaminadepierre.24@gmail.com')
                ->to($cid->getUser()->getEmail())
                ->subject('Nouveau postulant' . $job->getTitle())
                ->html('<h1>Bonne nouvelle, un nouveau candidat à postulé a votre offre de ' . $job->getTitle() . '</h1>
<p>Les information du candidat sont les suivante : </p>
<ul>
            <li>Prenom : '.$cid->getFirstName().'</li>
            <li>Nom : '.$cid->getName().'</li>
            <li>Cv :<!-- je n arrive pas a afficher le cv <a href="{{ asset( uploads/ ~ $cid->getCv() }}">CV</a> --></li>
</ul>
<br>
Cordialemnt 
<br>
L\'équipe TRT-CONSEIL');

            $mailer->send($email);


              return $this->redirectToRoute('to_apply_job', [], Response::HTTP_SEE_OTHER);
        }


        // Si le formulaire est valide mais que  le candidate n'a pas postulé
        if ($form->isSubmitted() && $form->isValid() && $job->getToApply() == false) {
            $job->removeCandidate($cid);
            $entityManager->flush();

            return $this->redirectToRoute('to_apply_job', [], Response::HTTP_SEE_OTHER);

        }


        return $this->renderForm('user/approvingToApply.html.twig', [
            'job' => $job,
            'form' => $form,
        ]);
    }
}