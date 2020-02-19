<?php

namespace App\Controller;

use App\Repository\ChevalierRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ChevaliersController extends AbstractController
{
    /**
     * @Route("/chevaliers", name="chevaliers")
     * @return Response
     */    
    public function index(ChevalierRepository $repository): Response
    {
        $chevaliers = $repository->findAll();
        return $this->render('chevaliers/index.html.twig',[
            'chevaliers' => $chevaliers
        ]);
    }
}
