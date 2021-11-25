<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestHomeController extends AbstractController
{
    #[Route('/test/home', name: 'test_home')]
    public function index(): Response
    {
        return $this->render('test_home/index.html.twig', [
            'controller_name' => 'TestHomeController',
        ]);
    }
    #[Route("Sayuri-Michael/")]
    public function number()
    {

        return $this->render('test_home/nice.html.twig', []);
    }
}
