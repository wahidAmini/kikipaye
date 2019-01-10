<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Groupe;

class MainController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function home()
    {   // the code for fetching the data from DB
        $budgetes = $this->getDoctrine()
        ->getRepository(Groupe::class)
        ->findAll();

    if (!$budgetes) {
        throw $this->createNotFoundException(
            'No budgete found '
        );
    }
    // the basic code of home function 
        return $this->render('main/home.html.twig', [
            'groups' => $budgetes,
        ]);
    }
    /**
     * @Route("/admin{id}", name="admin")
    */ 
    public function admin($id)
    {
       /* $group = $this->getDoctrine()->getRepository(Group::Class)->find($id);

        return $this->render('main/admin.html.twig', [
            'controller_name' => 'MainController',
        ]);
*/
     //utiliser doctrine et cet id pr ramener l'entité voulu au format objet
     $group = $this->getDoctrine()
     ->getRepository(Groupe::class)
     ->find($id);
     $users = $group->getUsers();

     $total = 0;
     foreach($users as $user){
         $total+=$user->getSpending();
     }

     return $this->render(
         'main/admin.html.twig',[
             'group' => $group,
             'users' =>$users,
             'total' =>$total
         ]
     );


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
