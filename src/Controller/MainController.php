<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
        return $this->render('main/home.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/admin", name="admin")
    */ 
    public function admin()
    {
        return $this->render('main/admin.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
   
    /**
     * @Route("/recap", name="recap")
    */
    public function recap()
    {
        return $this->render('main/recap.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/addgroup/{", name="recap")
    */
    public function addgroup()
    {
        return $this->render('main/recap.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
     
}
