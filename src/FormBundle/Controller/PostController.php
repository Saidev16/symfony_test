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
use FormBundle\Form\DocumentsType;


class PostController extends Controller
{
    /**
     * @Route("/")
     */

    public function createAction(Request $request){

        $em = $this->getDoctrine()->getManager();

        //Objet form 
        $post = new Applicant();

        $formPost = $this->get('form.factory')->createBuilder(FormType::class, $post)
                        ->add('Nom', TextType::class)
                        ->add('Prenom', TextType::class)
                        ->add('Date_naissance', DateType::class,[
                            'years' => range(1940, date('Y')+20)
                        ])
                        ->add('Email', EmailType::class)
                        ->add('telephone', NumberType::class)
                        ->add('Voyage_theme', TextType::class)
                        ->add('documents', DocumentsType::class)
                        ->add('enregistrer', SubmitType::class );

        $form = $formPost->getForm();
        // 
        

        if($request->isMethod('POST')){

            $form->handleRequest($request);

            $file = $post->getDocuments()->getBudgetExcel();
            $fileName =  $file->getClientOriginalName().'.'.$file->guessExtension();           
            $file->move($this->getParameter('upload_directory'). '/posts' ,$fileName);
            $post->getDocuments()->getBudgetExcel($fileName);

            $file = $post->getDocuments()->getMotivationsDocx();
            $fileName =  $file->getClientOriginalName().'.'.$file->guessExtension();           
            $file->move($this->getParameter('upload_directory'). '/posts' ,$fileName);
            $post->getDocuments()->getBudgetExcel($fileName);


            $em->persist($post);


            $em->flush();   
            $request->getSession()->getFlashBag()->add('success','Votre inscription a été bien enregistré ');
            
        }
        
        

    
        return $this->render('FormBundle:Post:create2.html.twig', ['formulaire'=>$form->createView()]);
                
        
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
    }

}
