
<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController
{
    public function index(): Response
    {
        return $this->render('introduction/index.html.twig', [
            'controller_name' => 'twigcont',
            'hello_world' => 'Hello World!!'
        ]);
    }

    public function index2(): Response
    {
        return $this->render('introduction/index_second.html.twig', [
            'controller_name' => 'twigcont',
            'hello_world' => 'Hello World!!'
        ]);
    }
}