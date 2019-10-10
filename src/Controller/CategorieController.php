<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;


use App\Entity\Annonce;
use App\Entity\Categorie;

class CategorieController extends AbstractController
{
    /**
     * @Route("/informatique", name="informatique")
     */
    public function itPage(ObjectManager $Manager)
    {

        $entityManager = $this->getDoctrine()->getManager();
        $prestationIt = $entityManager ->getRepository(Annonce::class)->findAll();

        //exit(var_dump($prestationIt));


        return $this->render('categorie/informatique.html.twig', [
            'prestaIt' => $prestationIt,
        ]);
    }


    /**
     * @Route ("/musique" , name="music")
     */

    public function musicPage() {

        $repositoryAnnonce = $this->getDoctrine()->getRepository(Annonce::class);
        $repositoryCategory = $this->getDoctrine()->getRepository(Categorie::class);

        $categorieMusic = $repositoryCategory->findByTitre('Musique');
        $prestationMusic = $repositoryAnnonce->findByCategorie($categorieMusic);

        return $this->render ('categorie/music.html.twig', [
            'prestaMusic' => $prestationMusic,
        ]);
        
    }

    /**
     * @Route ("/photos" , name="pix")
     */

    public function pixPage() {

        $repositoryAnnonce = $this->getDoctrine()->getRepository(Annonce::class);
        $repositoryCategory = $this->getDoctrine()->getRepository(Categorie::class);

        $categoriePix = $repositoryCategory->findByTitre('Photographie');
        $prestationPix = $repositoryAnnonce->findByCategorie($categoriePix);

        return $this->render ('categorie/pix.html.twig', [
            'prestaPix' => $prestationPix,
        ]);
        
    }
}
