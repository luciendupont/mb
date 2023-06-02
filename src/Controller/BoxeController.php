<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoxeController extends AbstractController
{
    #[Route('/', name: 'app_boxe')]
    public function index(): Response
    {
        return $this->render('boxe/index.html.twig', [
            'controller_name' => 'BoxeController',
        ]);
    }
}
