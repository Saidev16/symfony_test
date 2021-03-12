<?php

namespace FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FormBundle\Entity\Applicant;
use FormBundle\Entity\Documents;
use FormBundle\FormBundle;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\FormType;


class PostController extends Controller
{
    /**
     * @Route("/post/create")
     */

    public function createAction(Request $request){

        $em = $this->getDoctrine()->getManager();

        //Objet form 
        $post = new Applicant();

        $formPost = $this->get('form.factory')->createBuilder(FormType::class, $post)
                        ->add('Nom', TextType::class)
                        ->add('Prenom', TextType::class)
                        ->add('Date_naissance', DateType::class)
                        ->add('Email', EmailType::class)
                        ->add('telephone', NumberType::class)
                        ->add('Voyage_theme', TextType::class)
                        ->add('enregistrer', SubmitType::class );

        $form = $formPost->getForm();
        return $this->render('FormBundle:Post:create.html.twig', ['formulaire'=>$form->createView()]);
        
        

        if($request->isMethod('POST')){
            $form->handleRequest($request);
            
                // Objet Documents
                
                    
        $document = new Documents();
        $document->setBudgetExcel('www.excel1.com');
        $document->setMotivationsDocx('www.motivation.com');
        $document->setInstagramUrl('www.instagram.com');

                
        $post->setDocuments($document);
        $em->persist($post);


        $em->flush();    
        }

   
                
        
    }


    /**
     * @Route("/post")
     */
    public function indexAction()
    {
        return $this->render('FormBundle:Post:index.html.twig', [
            'titre' => 'Page index', 
            'post' => "Lorem ipsum dolor sit amet consectetur"
        ]);
        return $this->appel();
    }

    public function appel(){
        return new Response('je suis dans la method appel');
    }    

}
