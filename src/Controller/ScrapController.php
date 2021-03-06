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
        $title = $scrapservice->getTitleElPais();
        $body  = $scrapservice->getBodyElPais();
        $bodyElMundo = $scrapservice->getBodyElMundo();
        return $this->render('scrap/index.html.twig', [
            'title' =>  $title,
            'body' => $body,
            'bodyElMundo' => $bodyElMundo
        ]);
    }
}
