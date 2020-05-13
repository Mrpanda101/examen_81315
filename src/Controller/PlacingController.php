<?php

namespace App\Controller;

use App\Entity\Placing;
use App\Form\PlacingType;
use App\Repository\PlacingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/placing")
 */
class PlacingController extends AbstractController
{
    /**
     * @Route("/", name="placing_index", methods={"GET"})
     */
    public function index(PlacingRepository $placingRepository): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('placing/index.html.twig', [
            'placings' => $placingRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="placing_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $placing = new Placing();
        $form = $this->createForm(PlacingType::class, $placing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($placing);
            $entityManager->flush();

            return $this->redirectToRoute('placing_index');
        }

        return $this->render('placing/new.html.twig', [
            'placing' => $placing,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="placing_show", methods={"GET"})
     */
    public function check(Placing $placing): Response
    {

    }

    /**
     * @Route("/{id}/edit", name="placing_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Placing $placing): Response
    {
        $form = $this->createForm(PlacingType::class, $placing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('placing_index');
        }

        return $this->render('placing/edit.html.twig', [
            'placing' => $placing,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="placing_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Placing $placing): Response
    {
        if ($this->isCsrfTokenValid('delete'.$placing->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($placing);
            $entityManager->flush();
        }

        return $this->redirectToRoute('placing_index');
    }
}
