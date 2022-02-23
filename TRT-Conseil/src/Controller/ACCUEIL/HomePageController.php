<?php

namespace App\Controller\ACCUEIL;

use App\Repository\JobRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="app")
     */
    public function index(MailerInterface $mailer, JobRepository $jobRepository): Response
    {

        $email = new Email();
        $email->from('pierrechaminade17@gmail.com')
            ->to('pierrechaminade17@gmail.com')
            ->subject('je suis le sujet')
            ->html('bonjour je suis le body')
            ;

      $mailer->send($email);



        return $this->render('home_page/index.html.twig', [
            'emails' => $mailer,
            'jobs' => $jobRepository->findAll()
        ]);
    }
}
