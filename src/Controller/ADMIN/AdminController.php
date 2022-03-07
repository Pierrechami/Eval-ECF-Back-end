<?php

namespace App\Controller\ADMIN;

use App\Entity\Consultant;
use App\Entity\User;
use App\Form\ConsultantType;
use App\Form\RegistrationConsultantType;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin", name="admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/register", name="register_admin")
     */
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationConsultantType::class, $user);
        $form->handleRequest($request);
        $user->setIsAccepted(true);
        $user->setRoles(['ROLE_CONSULTANT']);


        if ($form->isSubmitted() && $form->isValid() ) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('adminregister_admin_infos');
        }

        return $this->render('admin/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/register/infos", name="register_admin_infos")
     */
    public function registerInfos (Request $request, EntityManagerInterface $entityManager): Response
    {

        $consultant = new Consultant();
        $formConsultant = $this->createForm(ConsultantType::class, $consultant);
        $formConsultant->handleRequest($request);


        if ($formConsultant->isSubmitted() && $formConsultant->isValid()) {

            $entityManager->persist($consultant);
            $entityManager->flush();

            return $this->redirectToRoute('consultant_index');
        }

        return $this->render('admin/registerInfos.html.twig', [
            'registrationFormConsultant' => $formConsultant->createView(),
        ]);
    }


}
