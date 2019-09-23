<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageRouterController extends AbstractController
{
    /**
     * @Route("/", name="page_accueil")
     */
    public function index()
    {
        return $this->render('page_router/index.html.twig', [
            'function_name' => 'index',
        ]);
    }
}
