<?php

namespace App\Controller;

use App\Repository\BrandRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BrandController extends AbstractController
{
    #[Route('/boutique', name: 'shop_index')]
    public function index(BrandRepository $brandRepository): Response
    {
        $brand = $brandRepository->findAll();
        return $this->render('brand/index.html.twig', [
            'brands' => $brand
        ]);
    }
}
