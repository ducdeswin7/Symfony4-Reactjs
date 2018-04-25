<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SantaController extends Controller
{
    /**
     * @Route("/santa", name="santa")
     */
    public function index()
    {
        return $this->render('default/root.html.twig', [
            'controller_name' => 'SantaController',
        ]);
    }
}
