<?php

namespace App\Controller;

use App\Entity\ClientMoral;
use App\Form\ClientMoralType;
use App\Repository\ClientMoralRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ClientMoralController extends AbstractController
{
     /**
     * @Route("/clientMoral", name="clientMoral")
     */
    public function index()
    {
        return $this->render('client_moral/add.html.twig');
    }/**
     * @Route("/ClientPhysique/list", name="CPlist", methods={"GET"})
     */
    public function listAll(ClientMoralRepository $clientMoralRepository): Response
    {
        return $this->render('client_moral/list.html.twig', [
            'clients' => $clientMoralRepository->findAll(),
        ]);
    }

    /**
     * @Route("/clientMoral/ajout", name="CMadd", methods={"GET","POST"})
     */
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $clientMoral = new ClientMoral();
        $form = $this->createForm(ClientMoralType::class, $clientMoral);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $entityManager->persist($entityManager);
            $entityManager->flush();
            return $this->redirectToRoute('clientMoral');
        }

        return $this->render('client_moral/error.html.twig', [
            'client' => $clientMoral,
            'form' => $form->createView(),
        ]);
    }

   
    /**
     * @Route("/{id}", name="clientP_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ClientMoral $clientMoral): Response
    {
        if ($this->isCsrfTokenValid('delete'.$clientMoral->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($clientMoral);
            $entityManager->flush();
        }

        return $this->redirectToRoute('clientMoral');
    }
}
