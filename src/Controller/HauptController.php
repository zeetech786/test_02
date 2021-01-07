<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HauptController extends AbstractController
{
    /**
     * @Route("/haupt", name="haupt")
     */
    public function index(): Response
    {
        $auto = ['BMW','Mercedes','Audi','Kia','Porsche','Opel','Toyota'];

        $benutzer = [
            'name'=>'Haris',
            'alter'=>'12',
            'hobby'=>'spielen',

        ];

        $msg = 'Hallo Mein name ist Symfony';

        return $this->render('haupt/index.html.twig', [
            'auto'=>$auto,
            'benutzer'=>$benutzer,
            'msg'=>$msg
        ]);
    }
     /**
     * @Route("/show", name="show")
     */
    public function show(){
        return new Response('This is the function show().');
    }
}
