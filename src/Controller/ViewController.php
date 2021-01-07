<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    /**
     * @Route("/view", name="view")
     */
    public function index(): Response
    {
        $tag = date('l');
        $user = [
            'name'=>'Zeeshan',
            'alter'=>42,
            
        ];
        $obst = array('Apfel','Birne','Orange','Bananne','Mango');

        return $this->render('view/index.html.twig', [
            'tag' => $tag,
            'user'=>$user,
            'obst'=>$obst,
        ]);
    }
}
