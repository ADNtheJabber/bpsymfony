<?php

namespace App\Controller;

use App\Entity\Compte;
use App\Form\CompteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompteController extends AbstractController
{
    /**
     * @Route("/compte", name="compte")
     */
    public function index()
    {
        return $this->render('compte/index.html.twig', [
            'controller_name' => 'CompteController',
        ]);
    }
    /**
     * @Route("/compte/add", name="compteAdd")
     */
    public function add(Request $request, EntityManagerInterface $em): Response
    {
        $compte = new Compte();
        
        $form = $this->createForm(CompteType::class, $compte)
                ;
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = new Compte;
            $em->persist($compte);
            $em->flush();
        }

        return $this->render('compte/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
