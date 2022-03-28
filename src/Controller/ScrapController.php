<?php

namespace App\Controller;


use App\Service\ScrapService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ScrapController extends AbstractController
{


    
     #[Route('/scrap', name: 'app_scrap')]
    public function index(ScrapService $scrapservice): Response
    {
        $msg = $scrapservice->getInfo();
      
        
        return $this->render('scrap/index.html.twig', [
            'controller_name' =>  $msg,
        ]);
    }
}
