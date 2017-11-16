<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MessageController extends Controller{
        
    /**
     * @Route("/message/{id}", name = "message")  
     */
    public function myAction($id){
        $data = $this->getDoctrine()
            ->getRepository(\AppBundle\Entity\FormEntity::class)
            ->find($id);
        
        return $this->render('default/message.html.twig', array('data' => $data));
    }
     
}
?>