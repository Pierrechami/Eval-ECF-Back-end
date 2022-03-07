<?php

namespace App\Controller\RECRUITEUR;

use App\Entity\Recruiter;
use App\Form\RecruiterType;
use App\Repository\CandidateRepository;
use App\Repository\JobRepository;
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

        $user = $this->getUser()->getIsAccepted();

        if ($user == false) {
            $this->addFlash('erreur_autorisation_recruiter', 'Votre compte "'. $this->getUser()->getUserIdentifier() . '" n\'a pas encore été accepté. Nos équipe font au plus vite pour valider votre demande !');
            return $this->redirectToRoute('app');
        }

        $id = $this->getUser()->getID();
        $email = $this->getUser()->getEmail();
        return $this->render('recruiter/index.html.twig', [
            'recruiters' => $recruiterRepository->findBy(['user' => ['id' => $id]]),
            'email' => $email
        ]);
    }

    /**
     * @Route("/new", name="recruiter_new", methods={"GET", "POST"})
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

        // Fait une redirection vers la route recruiter_index car l'user ne peut avoir qu'une seul société (recruiter)
        if ($recruiterRepository->findBy(['user' => ['id' => $iduser]]) !== []) {
            return $this->redirectToRoute('recruiter_index');
        }


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
    public function edit(Request $request, Recruiter $recruiter, EntityManagerInterface $entityManager, RecruiterRepository $recruiterRepository, $id): Response
    {


        $userid = $this->getUser()->getId(); // 5
        $idRecruiterUser = $recruiter->getUser()->getId();

        //retour vers la page d'accueil si un recruteur essai de modifier les informations d'un autre recruteur
        if ($userid !== $idRecruiterUser) {
            return $this->redirectToRoute('app');
        }


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
        if ($this->isCsrfTokenValid('delete' . $recruiter->getId(), $request->request->get('_token'))) {
            $entityManager->remove($recruiter);
            $entityManager->flush();
        }

        return $this->redirectToRoute('recruiter_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/to-apply", name="to_apply_recruiter")
     */
    public function toApplyRecruiter(JobRepository $jobRepository, RecruiterRepository $recruiterRepository):Response
    {

        $user = $this->getUser()->getIsAccepted();

        if ($user == false) {
            $this->addFlash('erreur_autorisation_recruiter', 'Votre compte "'. $this->getUser()->getUserIdentifier() . '" n\'a pas encore été accepté. Nos équipe font au plus vite pour valider votre demande !');
            return $this->redirectToRoute('app');
        }



        $userId = $this->getUser()->getId();

        if ($recruiterRepository->findBy(['user' => ['id' => $userId]]) == [] )
        {
            return $this->redirectToRoute('recruiter_new');
        }
        $RecruiterId = $recruiterRepository->findBy(['user' => ['id' => $userId]])[0]->getId();

        // Récupérer tout les job qui ont été mis a en ligne par le recruteur
        $jobs = $jobRepository->findBy(['recruiter' => ['id' => $RecruiterId]]);



        return $this->render('recruiter/toApply.html.twig', [
            'jobs' => $jobs
        ]);
    }

}
