<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

use App\Entity\Annonce;

class SiteController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function home()
    {
        return $this->render('site/accueil.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/annonce", name="annonce")
     */
    public function annonce()
    {

        $annonce = new Annonce(); 

        $form = $this->createFormBuilder($annonce)
            ->add('name', TextType::class)
            ->add('prenom', TextType::class)
            ->add('email', TextType::class)
            ->add('age', PasswordType::class)
            ->add('information', PasswordType::class)
            ->getForm();

        return $this->render('site/annonce.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
