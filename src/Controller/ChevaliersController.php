<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ChevaliersController extends AbstractController
{
    /**
     * @Route("/chevaliers", name="chevaliers")
     */
    public function index()
    {
        return $this->render('chevaliers/index.html.twig', [
            'controller_name' => 'ChevaliersController',
        ]);
    }
}
