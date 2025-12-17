<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
    #[Route('/test')]
    public function test(): Response
    {
        $number = random_int(0, 100);

        return $this->render('test.html.twig', [
            'number' => $number,
        ]);
    }
}
