<?php

namespace App\Controller\ADMIN;

use App\Entity\Consultant;
use App\Form\ConsultantType;
use App\Repository\ConsultantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class ConsultantController extends AbstractController
{
    /**
     * @Route("/", name="consultant_index", methods={"GET"})
     */
    public function index(ConsultantRepository $consultantRepository): Response
    {
        return $this->render('admin/consultant/index.html.twig', [
            'consultants' => $consultantRepository->findAll(),
        ]);
    }


    /**
     * @Route("/{id}/edit", name="consultant_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Consultant $consultant, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ConsultantType::class, $consultant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('consultant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/consultant/edit.html.twig', [
            'consultant' => $consultant,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="consultant_delete", methods={"POST"})
     */
    public function delete(Request $request, Consultant $consultant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$consultant->getId(), $request->request->get('_token'))) {
            $entityManager->remove($consultant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('consultant_index', [], Response::HTTP_SEE_OTHER);
    }
}
