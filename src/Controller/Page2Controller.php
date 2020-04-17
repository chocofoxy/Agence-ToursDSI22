<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Page2Controller extends AbstractController
{
    /**
     * @Route("/page2", name="page2")
     */
    public function index()
    {
        return $this->render('app/destination.html.twig', [
            'controller_name' => 'Page2Controller',
        ]);
    }
}
