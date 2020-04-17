<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Page1Controller extends AbstractController
{
    /**
     * @Route("/page1", name="page1")
     */
    public function index()
    {
        return $this->render('app/index.html.twig', [
            'controller_name' => 'Page1Controller',
        ]);
    }
}
