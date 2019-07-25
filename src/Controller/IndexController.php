<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    
    /**
     * @Route("/pagina-con-error", name="error")
     */
    public function error(){
        /*
        $response = new Response();
        $response->setStatusCode(500);
        return $response;
         * 
         */
        throw new \Exception('Something went wrong!');
    }
}
