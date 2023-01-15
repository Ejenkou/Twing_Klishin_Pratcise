<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GreetingsController extends AbstractController
{
    public function index(): Response
    {
        $labe = [
            'poster' => 'Постер фильма*:',
            'name' => ' Название фильма*: ',
            'show' => '- Сейчас в кинотеатрах?',
            'where' => 'Показ: ',
            'zanr' => ' Жанр фильма: ',
            'cash' => 'Кассовые сборы:',
            'visit' => 'Количество посетивших:',
            'rate' => 'Рейтинг:',
            'descript' => 'Описание фильма*:'
        ];

        return $this->render('introduction/index.html.twig', [
            'controller_name' => 'GreetingsController',
            'hello_world' => 'Hello World!!',
            'labe' => $labe            
        ]);
    }

    public function index2(): Response
    {
        return $this->render('introduction/index2.html.twig', [
            'controller_name' => 'GreetingsController',
            'hello_world' => 'Hello World!!'
        ]);
    }

    public function notif(): Response
    {
        return $this->render('introduction/notif.html.twig', [
            'controller_name' => 'GreetingsController',
            'hello_world' => 'Hello World!!'
        ]);
    }
}