<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GreetingsController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('introduction/index.html.twig', [
            'controller_name' => 'GreetingsController',
            'hello_world' => 'Hello World!!',
            'labe' =>[
                'poster' => 'Постер фильма*:',
                'name' => ' Название фильма*: ',
                'show' => '- Сейчас в кинотеатрах?',
                'where' => 'Показ: ',
                'zanr' => ' Жанр фильма: ',
                'cash' => 'Кассовые сборы:',
                'visit' => 'Количество посетивших:',
                'rate' => 'Рейтинг:',
                'descript' => 'Описание фильма*:',
        ],
        
        'checkbox' => [
                'list' => [
                    'where1' => ' Apollo Tallin, ',
                    'where2' => ' Apollo Johvi, ',
                    'where3' => ' Apollo Tartu, '
                ]
                ],
        'radio' => [
                'list' => [
                    'rate1' => ' G ',
                    'rate2' => ' PG ',
                    'rate3' => ' PG-13 ',
                    'rate4' => ' R '
                ]
                ],

        'select' => [
                'list' => [
                    'option1' => ' Horror ',
                    'option2' => ' Blockbuster ',
                    'option3' => ' Dramma ',
                    'option4' => ' Comedy '
                ]
                ],

                 
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