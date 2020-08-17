<?php

namespace App\Controller;

use App\Entity\Compte;
use App\Form\CompteType;
use App\Repository\CompteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompteController extends AbstractController
{
                
        /**
         * @Route("/compte", name="compte", methods={"GET","POST"})
         */
        public function add(Request $request, EntityManagerInterface $entityManager): Response
        {
            $compte = new Compte();
            $form = $this->createForm(CompteType::class, $compte);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                
                $entityManager->persist($compte);
                $entityManager->flush();
                return $this->redirectToRoute('compte');
            }

            return $this->render('compte/add.html.twig', [
                'compte' => $compte,
                'form' => $form->createView(),
            ]);;
        }
    
        /**
        * @Route("/Compte/list", name="Clist", methods={"GET"})
        */
        public function listAll(CompteRepository $compteRepository): Response
        {
            return $this->render('compte/list.html.twig', [
                'comptes' => $compteRepository->findAll(),
            ]);
        }

        
        
        /**
         * @Route("/compte/del/{id}", name="compte_delete", methods={"DELETE"})
         */
        public function delete(Request $request, Compte $compte): Response
        {
            if ($this->isCsrfTokenValid('delete'.$compte->getId(), $request->request->get('_token'))) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($compte);
                $entityManager->flush();
            }

            return $this->redirectToRoute('Clist');
        }
}
