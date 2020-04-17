<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class Page1Controller extends AbstractController
{

    public function index()
    {
        $response  = new Response($this->renderView('app/index.html.twig', []) , 200);
        $response->headers->set('Content-Type', 'text/html');
        $response->setCharset('utf-8');
        return $response ;
    }
}
