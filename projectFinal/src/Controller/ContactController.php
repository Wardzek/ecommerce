<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact_index')]
    public function index(Request $request, MailerInterface $mailer)
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()) {

            $contactFormData = $form->getData();

            $message = (new Email())
                ->from($contactFormData['email'])
                ->to('your@mail.com')
                ->subject('Vous avez du courrier')
                ->text('Expéditeur : '.$contactFormData['email'].\PHP_EOL.
                    $contactFormData['Message'],
                    'text/plain');
            $mailer->send($message);




            $this->addFlash('Succès', 'Votre message a été envoyé');

            return $this->redirectToRoute('contact_index');
        }



        return $this->render('contact/index.html.twig', [
            'our_form' => $form->createView()
        ]);
    }
}
