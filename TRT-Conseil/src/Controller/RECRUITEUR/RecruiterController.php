<?php

namespace App\Controller\RECRUITEUR;

use App\Entity\Recruiter;
use App\Form\RecruiterType;
use App\Repository\RecruiterRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/recruiter")
 */
class RecruiterController extends AbstractController
{
    /**
     * @Route("/", name="recruiter_index", methods={"GET"})
     */
    public function index(RecruiterRepository $recruiterRepository): Response
    {
        $id = $this->getUser()->getID();
        $email = $this->getUser()->getEmail();
        return $this->render('recruiter/index.html.twig', [
            'recruiters' => $recruiterRepository->findBy( ['user' => ['id' => $id]]),
            'email' => $email
        ]);
    }

    /**
     * @Route("/new", name="recruiter_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $recruiter = new Recruiter();
        $form = $this->createForm(RecruiterType::class, $recruiter);
        $form->handleRequest($request);
        $recruiter->setUser($this->getUser());


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($recruiter);
            $entityManager->flush();

            return $this->redirectToRoute('recruiter_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('recruiter/new.html.twig', [
            'recruiter' => $recruiter,
            'form' => $form,
        ]);
    }




    /**
     * @Route("/{id}/edit", name="recruiter_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Recruiter $recruiter, EntityManagerInterface $entityManager , $id): Response
    {
        $id = $recruiter->getId();
        $form = $this->createForm(RecruiterType::class, $recruiter);
        $form->handleRequest($request);
        $recruiter->setUser($this->getUser());

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('recruiter_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('recruiter/edit.html.twig', [
            'recruiter' => $recruiter,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="recruiter_delete", methods={"POST"})
     */
    public function delete(Request $request, Recruiter $recruiter, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$recruiter->getId(), $request->request->get('_token'))) {
            $entityManager->remove($recruiter);
            $entityManager->flush();
        }

        return $this->redirectToRoute('recruiter_index', [], Response::HTTP_SEE_OTHER);
    }
}
