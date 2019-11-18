<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Entity\Regions;
use App\Entity\Categorie;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;



class SiteController extends AbstractController
{
    /**
     * @Route("/home", name="accueil")
     */
    public function home()
    {
        return $this->render('site/accueil.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }



    /**
     * @Route("/soumettre", name="soumettre")
     */
    public function annonce(Request $request, ObjectManager $manager)
    {

        $annonce = new Annonce(); 

        $form = $this->createFormBuilder($annonce)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('age', NumberType::class)
            ->add('region', EntityType::class, [
                'class' => Regions::class,
                'choice_label' => 'region',
                'multiple' => false, 
                'expanded' => false])
            ->add('email', TextType::class)
            ->add('categorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'titre',
                'multiple' => false,
                'expanded' => false])
            ->add('pretentions', IntegerType::class)
            ->add('phoneNumber', NumberType::class)
            ->add('information', TextareaType::class)
            ->getForm();

            $form->handleRequest($request);

            //exit(var_dump($form));

            if($form->isSubmitted() && $form->isValid()) {

                $manager->persist($annonce);
                $manager->flush();

                return $this->redirectToRoute('accueil');

            } 

        return $this->render('site/annonce.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/annonces", name="annonces")
     */
    public function allAnnonces () {

        $repository = $this->getDoctrine()->getRepository(Annonce::class);
        $annonces = $repository->findAll();

        //exit(var_dump($annonces));

        return $this->render('site/allAnnonces.html.twig',[
            'annonces' => $annonces,
        ]);
    }


    
}
