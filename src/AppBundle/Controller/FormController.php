<?php

namespace AppBundle\Controller;

use AppBundle\Form\FormType;
use AppBundle\Entity\FormEntity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class FormController extends Controller
{
    /**
     * @Route("/", name="form")
     */
    public function indexAction(Request $request){
        
        $formEntity = new FormEntity();
                
        $form = $this->createForm(FormType::class, $formEntity);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $form = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($form);
            $em->flush();

            return $this->redirectToRoute('message', array('id' => $form->getId()));
        }
        
        return $this->render('default/form.html.twig', array('form' => $form->createView()));
    }
        
    
}
?>