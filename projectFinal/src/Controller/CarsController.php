<?php

namespace App\Controller;

use App\Entity\Cars;
use App\Repository\CarsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarsController extends AbstractController
{
    #[Route('/vehicule', name: 'cars_index')]
    public function index(CarsRepository $carsRepository): Response
    {
        $cars = $carsRepository->findAll();
        return $this->render('cars/index.html.twig', [
            'cars' => $cars
        ]);
    }

    #[Route("/product/{id}", name: "cars_detail")]
    public function details(Cars $cars): Response
    {
        return $this->render('cars/details.html.twig', [
            'car' => $cars,
        ]);
    }
}
