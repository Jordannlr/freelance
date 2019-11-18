<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Entity\Categorie;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;


use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategorieController extends AbstractController
{
    /**
     * @Route("/informatique", name="informatique")
     */
    public function itPage(Request $request, PaginatorInterface $paginator)
    {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->getRepository(Annonce::class)->createQueryBuilder('p')
                                                ->where('p.categorie = 1');
        $query = $qb->getQuery()->getResult();

        $prestaIt = $paginator->paginate($query, $request->query->getInt('page', 1), 6);

        $cat = $this->getDoctrine()->getRepository(categorie::class);
        $catIt = $cat->findAll();
        //exit(var_dump($catIt));
    


        return $this->render('categorie/informatique.html.twig', [
            'prestaIt' => $prestaIt,
            'pagination' => $prestaIt,
            'catInformatique' => $catIt,
        ]);
    }


    /**
     * @Route ("/musique" , name="music")
     */

    public function musicPage(Request $request, PaginatorInterface $paginator) {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->getRepository(Annonce::class)->createQueryBuilder('p')
                                                ->where('p.categorie = 3');
        $query = $qb->getQuery()->getResult();

        $prestaMusic = $paginator->paginate($query, $request->query->getInt('page', 1), 6);

        return $this->render('categorie/music.html.twig', [
            'prestaMusic' => $prestaMusic,
            'pagination' => $prestaMusic,
        ]);
        
    }

    /**
     * @Route ("/photos" , name="pix")
     */

    public function pixPage(Request $request, PaginatorInterface $paginator) {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->getRepository(Annonce::class)->createQueryBuilder('p')
                                                ->where('p.categorie = 2');
        $query = $qb->getQuery()->getResult();

        $prestaPix = $paginator->paginate($query, $request->query->getInt('page', 1), 6);
    
        return $this->render('categorie/pix.html.twig', [
            'prestaPix' => $prestaPix,
            'pagination' => $prestaPix,
        ]);
        
    }
}
