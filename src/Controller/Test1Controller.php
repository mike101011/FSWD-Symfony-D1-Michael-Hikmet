<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Test1Controller extends AbstractController
{
    #[Route('/test1', name: 'test1')]
    public function index(): Response
    {
        return $this->render('test1/index.html.twig', [
            'controller_name' => 'Test1Controller',
        ]);
    }
    #[Route("random/{max}", name: "random_number")]
    public function number($max)
    {
        $number = random_int(0, $max);
        return $this->render('test1/random.html.twig', [
            'randomNumber' => $number
        ]);
    }
}
