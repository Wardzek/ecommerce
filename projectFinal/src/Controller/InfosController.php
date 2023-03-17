<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InfosController extends AbstractController
{
    #[Route('/conditions', name: 'conditions_index')]
    public function conditions(): Response
    {
        return $this->render('informations/conditions.html.twig');
    }

    #[Route('/politique', name: 'politique_index')]
    public function politique(): Response
    {
        return $this->render('informations/politique.html.twig');
    }

    #[Route('/who', name: 'who_index')]
    public function who(): Response
    {
        return $this->render('informations/who.html.twig');
    }
}


