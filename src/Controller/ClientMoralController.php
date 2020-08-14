<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClientMoralController extends AbstractController
{
    /**
     * @Route("/clientmoral/add", name="client_moral_add")
     */
    public function add()
    {
        return $this->render('client_moral/add.html.twig', [
            'controller_name' => 'ClientMoralController',
        ]);
    }

    /**
     * @Route("/clientmoral/result", name="client_moral_result")
     */
    public function result()
    {
        return $this->render('client_moral/result.html.twig', [
            'controller_name' => 'ClientMoralController',
        ]);
    }

    /**
     * @Route("/clientmoral/list", name="client_moral_list")
     */
    public function list()
    {
        return $this->render('client_moral/list.html.twig', [
            'controller_name' => 'ClientMoralController',
        ]);
    }
}
