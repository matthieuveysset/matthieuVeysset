<?php
namespace App\Controller;

use App\Repository\ChevalierRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     * @return Response
     */    
    public function index(ChevalierRepository $repository): Response
    {
        $chevaliers = $repository->findAll();
        return $this->render('pages/home.html.twig',[
            'chevaliers' => $chevaliers
        ]);
    }
}