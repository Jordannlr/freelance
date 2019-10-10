<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegionsController extends AbstractController
{
    /**
     * @Route("/regions", name="regions")
     */
    public function index()
    {
        return $this->render('regions/index.html.twig', [
            'controller_name' => 'RegionsController',
        ]);
    }
}
