<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ScrapController extends AbstractController
{
    #[Route('/scrap', name: 'app_scrap')]
    public function index(): Response
    {
        return $this->render('scrap/index.html.twig', [
            'controller_name' => 'ScrapController',
        ]);
    }
}
