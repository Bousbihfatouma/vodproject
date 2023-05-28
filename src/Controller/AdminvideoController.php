<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminvideoController extends AbstractController
{
    #[Route('/adminvideo', name: 'app_adminvideo')]
    public function index(): Response
    {
        return $this->render('adminvideo/index.html.twig', [
            'controller_name' => 'AdminvideoController',
        ]);
    }
}
