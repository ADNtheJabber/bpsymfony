<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClientPhysiqueController extends AbstractController
{
    /**
     * @Route("/clientphysique/add", name="client_physique_add")
     */
    public function add()
    {
        return $this->render('client_physique/add.html.twig', [
            'controller_name' => 'ClientPhysiqueController',
        ]);
    }

    /**
     * @Route("/clientphysique/result", name="client_physique_result")
     */
    public function result()
    {
        return $this->render('client_physique/result.html.twig', [
            'controller_name' => 'ClientPhysiqueController',
        ]);
    }

    /**
     * @Route("/clientphysique/list", name="client_physique_list")
     */
    public function list()
    {
        return $this->render('client_physique/list.html.twig', [
            'controller_name' => 'ClientPhysiqueController',
        ]);
    }
}
