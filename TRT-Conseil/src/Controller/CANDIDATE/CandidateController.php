<?php

namespace App\Controller\CANDIDATE;

use App\Entity\Candidate;
use App\Form\CandidateType;
use App\Repository\CandidateRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

/**
 * @Route("/candidate")
 */
class CandidateController extends AbstractController
{
    /**
     * @Route("/", name="candidate_index", methods={"GET"})
     */
    public function index(CandidateRepository $candidateRepository): Response
    {
        $userId = $this->getUser()->getId();
        $candidate = $candidateRepository->findBy(['user' => ['id' => $userId]]);

        return $this->render('candidate/index.html.twig', [
            'candidates' => $candidate,
        ]);
    }

    /**
     * @Route("/new", name="candidate_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $candidate = new Candidate();
        $form = $this->createForm(CandidateType::class, $candidate);
        $form->handleRequest($request);
        $candidate->setUser($this->getUser());

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $cvFile */
            $cvFile = $form->get('imageFile')->getData();


            if ($cvFile) {
                $newFilename = uniqid() . '.' . $cvFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $cvFile->move(
                        $this->getParameter('kernel.project_dir') . '/public/uploads',
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', $e->getMessage());
                }

                $candidate->setCv($newFilename);
            }

            $entityManager->persist($candidate);
            $entityManager->flush();

            return $this->redirectToRoute('candidate_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('candidate/new.html.twig', [
            'candidate' => $candidate,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="candidate_show", methods={"GET"})
     */
    public function show(Candidate $candidate): Response
    {

        return $this->render('candidate/show.html.twig', [
            'candidate' => $candidate,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="candidate_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Candidate $candidate, EntityManagerInterface $entityManager): Response
    {

        $form = $this->createForm(CandidateType::class, $candidate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /** @var UploadedFile $cvFile */
            $cvFile = $form->get('imageFile')->getData();


            if ($cvFile) {
                $newFilename = $candidate->getCv();

                // Move the file to the directory where brochures are stored
                try {
                    $cvFile->move(
                        $this->getParameter('kernel.project_dir') . '/public/uploads',
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', $e->getMessage());
                }

                $candidate->setCv($newFilename);
            }


            $entityManager->flush();

            return $this->redirectToRoute('candidate_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('candidate/edit.html.twig', [
            'candidate' => $candidate,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="candidate_delete", methods={"POST"})
     */
    public function delete(Request $request, Candidate $candidate, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $candidate->getId(), $request->request->get('_token'))) {
            $filename = $candidate->getCv();

            $entityManager->remove($candidate);
            $entityManager->flush();
            $fs = new Filesystem();
            $fs->remove($this->getParameter('kernel.project_dir') . '/public/uploads/' . $filename);
        }

        return $this->redirectToRoute('candidate_index', [], Response::HTTP_SEE_OTHER);
    }

}
