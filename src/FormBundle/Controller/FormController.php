<?php

namespace FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class FormController extends Controller
{
    /**
     * @Route("/form", name="form_apply")
     */
    public function indexAction()
    {
        return $this->render('FormBundle:Form:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/form/{id}/{annee}", name="form_show", requirements={"id":"\d+" , "annee":"\d{4}" })
     */
    public function showAction($id,$annee)
    {
        return new Response('page show' . $id. $annee);
        
    }



}
