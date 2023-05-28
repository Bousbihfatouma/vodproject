<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdmincommentsController extends AbstractController
{
    #[Route('/admincomments', name: 'app_admincomments')]
    public function index(): Response
    {
        return $this->render('admincomments/index.html.twig', [
            'controller_name' => 'AdmincommentsController',
        ]);
    }
}
