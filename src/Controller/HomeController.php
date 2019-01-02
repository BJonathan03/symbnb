<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

        /**
     * Montre la page qui dit bonjour
     * @Route("/hello", name="hello_base")
     * @Route("/hello/{prenom}", name="hello_prenom")
     * @Route("/hello/{prenom}/age", name="hello_age")
     * @Route("/hello/{prenom}/age/{age}", name="hello")
     *
     */
    public function hello($prenom = 'anonyme', $age = 999){
        return $this->render(
            'hello.html.twig',
            [
                'prenom' => $prenom,
                'age' => $age
            ]
        );
    }

    /**
     * @Route("/", name="homepage" )
     */

    public function home(){
        $prenoms = ["Anne" => 31, "René" => 12, "Joseph" => 6, "Gollum" => 124];
        
        return $this->render(
            'home.html.twig', 
            ['title' => "Bonjour à tous",
             'age' => 14,
             'tableau' => $prenoms
             ]
        );
    }

}

?>