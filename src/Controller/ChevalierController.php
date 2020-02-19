<?php

namespace App\Controller;

use App\Entity\Chevalier;
use App\Form\ChevalierType;
use App\Repository\ChevalierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/chevalier")
 */
class ChevalierController extends AbstractController
{
    /**
     * @Route("/", name="chevalier_index", methods={"GET"})
     */
    public function index(ChevalierRepository $chevalierRepository): Response
    {
        return $this->render('chevalier/index.html.twig', [
            'chevaliers' => $chevalierRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="chevalier_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $chevalier = new Chevalier();
        $form = $this->createForm(ChevalierType::class, $chevalier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($chevalier);
            $entityManager->flush();

            return $this->redirectToRoute('chevalier_index');
        }

        return $this->render('chevalier/new.html.twig', [
            'chevalier' => $chevalier,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="chevalier_show", methods={"GET"})
     */
    public function show(Chevalier $chevalier): Response
    {
        return $this->render('chevalier/show.html.twig', [
            'chevalier' => $chevalier,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="chevalier_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Chevalier $chevalier): Response
    {
        $form = $this->createForm(ChevalierType::class, $chevalier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chevalier_index');
        }

        return $this->render('chevalier/edit.html.twig', [
            'chevalier' => $chevalier,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="chevalier_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Chevalier $chevalier): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chevalier->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($chevalier);
            $entityManager->flush();
        }

        return $this->redirectToRoute('chevalier_index');
    }
}
