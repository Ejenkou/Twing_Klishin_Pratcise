<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

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
                'rate' => 'Рейтинг*:',
                'descript' => 'Описание фильма*:',
        ],
        
        'checkbox' => [
                'list' => [
                    'where1' => 'Apollo Tallin',
                    'where2' => 'Apollo Johvi',
                    'where3' => 'Apollo Tartu'
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



        
  

    public function answerForm(Request $request, SessionInterface $session){

        $name = $request->get('name');
        $show = ($request->get('show')==TRUE)?"фильм показывают в кинотетрах:":"фильм не показывают в кинотетрах";
        $where = $request->get('where');
        $zanr = $request->get('zanr');
        $cash = $request->get('cash');
        $visit = $request->get('visit');
        $rate = $request->get('rate');
        $descript = $request->get('descript');
        $uploadfile = $request->files->get('uploadfile');
        
        $session->set('form_data', [
        'name'=> $name,
        'show' => $show,
        'where' => $where,
        'zanr' => $zanr,
        'cash' => $cash,
        'visit' => $visit,
        'rate' => $rate,
        'descript' => $descript,
        'file_name' => basename($uploadfile),
        'file_size' => filesize($uploadfile)
        ]); 

        return $this->redirectToRoute('answer_list');
}

public function answer_list(SessionInterface $session): Response
{
    
    $data  = $session -> get('form_data');

    if (!$data) {
        // Redirect to error page with error message
        return $this->render('error.html.twig', [
            'error_message' => 'Form data not found. Please submit the form first.',
        ]);
    }


    
        return $this->render('introduction/answer_list.html.twig', [
            'controller_name' => 'GreetingsController',
            'hello_world' => 'Hello World!!',
            'data' => $data
        ]);
    }
}