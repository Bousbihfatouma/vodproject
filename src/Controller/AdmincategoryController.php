<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdmincategoryController extends AbstractController
{
    #[Route('/admincategory', name: 'app_admincategory')]
    public function index(): Response
    {
        return $this->render('admincategory/index.html.twig', [
            'controller_name' => 'AdmincategoryController',
        ]);
    }
}
