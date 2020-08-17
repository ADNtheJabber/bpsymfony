<?php

namespace App\Controller;

use App\Entity\ClientPhysique;
use App\Form\ClientPhysiqueType;
use App\Repository\ClientPhysiqueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ClientPhysiqueController extends AbstractController
{
    
    /**
     * @Route("/clientPhysique", name="clientPhysique")
     */
    public function index()
    {
        return $this->render('client_physique/add.html.twig');
    }/**
     * @Route("/ClientPhysique/list", name="CPlist", methods={"GET"})
     */
    public function listAll(ClientPhysiqueRepository $clientPhysiqueRepository): Response
    {
        return $this->render('client_physique/list.html.twig', [
            'clients' => $clientPhysiqueRepository->findAll(),
        ]);
    }

    /**
     * @Route("/clientPhysique/ajout", name="CPadd", methods={"GET","POST"})
     */
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $clientPhysique = new ClientPhysique();
        $form = $this->createForm(ClientPhysiqueType::class, $clientPhysique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $entityManager->persist($entityManager);
            $entityManager->flush();
            return $this->redirectToRoute('clientPhysique');
        }

        return $this->render('client_physique/error.html.twig', [
            'client' => $clientPhysique,
            'form' => $form->createView(),
        ]);
    }

    
    /**
     * @Route("/{id}", name="clientP_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ClientPhysique $clientPhysique): Response
    {
        if ($this->isCsrfTokenValid('delete'.$clientPhysique->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($clientPhysique);
            $entityManager->flush();
        }

        return $this->redirectToRoute('clientPhysique');
    }
}
