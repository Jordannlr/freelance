<?php

namespace App\Controller;

use App\Entity\Annonce;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RegionController extends AbstractController
{
    /**
     * @Route("/home/Grand-Est", name="GES")
     */
    public function GES(Request $request, PaginatorInterface $paginator) {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->getRepository(Annonce::class)->createQueryBuilder('p')
                                                ->where('p.region = 1');
        $query = $qb->getQuery()->getResult();

        //exit(var_dump($query));

        $GES = $paginator->paginate($query, $request->query->getInt('page', 1), 6);
    
        return $this->render('region/ges.html.twig', [
            'regGes' => $GES,
            'pagination' => $GES,
        ]);
    }

    /**
     * @Route("/home/Nouvelle-Aquitaine", name="NAQ")
     */
    public function NAQ(Request $request, PaginatorInterface $paginator) {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->getRepository(Annonce::class)->createQueryBuilder('p')
                                                ->where('p.region = 2');
        $query = $qb->getQuery()->getResult();

        $NAQ = $paginator->paginate($query, $request->query->getInt('page', 1), 6);
    
        return $this->render('region/naq.html.twig', [
            'regNaq' => $NAQ,
            'pagination' => $NAQ,
        ]);
    }

    /**
     * @Route("/home/Auvergne-Rhône-Alpes", name="ARA")
     */
    public function ARA(Request $request, PaginatorInterface $paginator) {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->getRepository(Annonce::class)->createQueryBuilder('p')
                                                ->where('p.region = 3');
        $query = $qb->getQuery()->getResult();

        $ARA = $paginator->paginate($query, $request->query->getInt('page', 1), 6);
    
        return $this->render('region/ara.html.twig', [
            'regAra' => $ARA,
            'pagination' => $ARA,
        ]);
    }

    /**
     * @Route("/home/Bourgogne-Franche-Comté", name="BFC")
     */
    public function BFC(Request $request, PaginatorInterface $paginator) {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->getRepository(Annonce::class)->createQueryBuilder('p')
                                                ->where('p.region = 4');
        $query = $qb->getQuery()->getResult();

        $BFC = $paginator->paginate($query, $request->query->getInt('page', 1), 6);
    
        return $this->render('region/bfc.html.twig', [
            'regBfc' => $BFC,
            'pagination' => $BFC,
        ]);
    }

    /**
     * @Route("/home/Bretagne", name="BRE")
     */
    public function BRE(Request $request, PaginatorInterface $paginator) {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->getRepository(Annonce::class)->createQueryBuilder('p')
                                                ->where('p.region = 5');
        $query = $qb->getQuery()->getResult();

        $BRE = $paginator->paginate($query, $request->query->getInt('page', 1), 6);
    
        return $this->render('region/bre.html.twig', [
            'regBre' => $BRE,
            'pagination' => $BRE,
        ]);
    }

    /**
     * @Route("/home/Centre-Val-de-Loire", name="CVL")
     */
    public function CVL(Request $request, PaginatorInterface $paginator) {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->getRepository(Annonce::class)->createQueryBuilder('p')
                                                ->where('p.region = 6');
        $query = $qb->getQuery()->getResult();

        $CVL = $paginator->paginate($query, $request->query->getInt('page', 1), 6);
    
        return $this->render('region/cvl.html.twig', [
            'regCvl' => $CVL,
            'pagination' => $CVL,
        ]);
    }

    /**
     * @Route("/home/Corse", name="COR")
     */
    public function COR(Request $request, PaginatorInterface $paginator) {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->getRepository(Annonce::class)->createQueryBuilder('p')
                                                ->where('p.region = 7');
        $query = $qb->getQuery()->getResult();

        $COR = $paginator->paginate($query, $request->query->getInt('page', 1), 6);
    
        return $this->render('region/cor.html.twig', [
            'regCor' => $COR,
            'pagination' => $COR,
        ]);
    }

    /**
     * @Route("/home/Ile-de-France", name="IDF")
     */
    public function IDF(Request $request, PaginatorInterface $paginator) {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->getRepository(Annonce::class)->createQueryBuilder('p')
                                                ->where('p.region = 8');
        $query = $qb->getQuery()->getResult();

        $IDF = $paginator->paginate($query, $request->query->getInt('page', 1), 6);
    
        return $this->render('region/idf.html.twig', [
            'regIdf' => $IDF,
            'pagination' => $IDF,
        ]);
    }

    /**
     * @Route("/home/Occitanie", name="OCC")
     */
    public function OCC(Request $request, PaginatorInterface $paginator) {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->getRepository(Annonce::class)->createQueryBuilder('p')
                                                ->where('p.region = 9');
        $query = $qb->getQuery()->getResult();

        $OCC = $paginator->paginate($query, $request->query->getInt('page', 1), 6);
    
        return $this->render('region/occ.html.twig', [
            'regOcc' => $OCC,
            'pagination' => $OCC,
        ]);
    }

    /**
     * @Route("/home/Hauts-de-France", name="HDF")
     */
    public function HDF(Request $request, PaginatorInterface $paginator) {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->getRepository(Annonce::class)->createQueryBuilder('p')
                                                ->where('p.region = 10');
        $query = $qb->getQuery()->getResult();

        $HDF = $paginator->paginate($query, $request->query->getInt('page', 1), 6);
    
        return $this->render('region/hdf.html.twig', [
            'regHdf' => $HDF,
            'pagination' => $HDF,
        ]);
    }

    /**
     * @Route("/home/Normandie", name="NOR")
     */
    public function NOR(Request $request, PaginatorInterface $paginator) {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->getRepository(Annonce::class)->createQueryBuilder('p')
                                                ->where('p.region = 11');
        $query = $qb->getQuery()->getResult();

        $NOR = $paginator->paginate($query, $request->query->getInt('page', 1), 6);
    
        return $this->render('region/nor.html.twig', [
            'regNor' => $NOR,
            'pagination' => $NOR,
        ]);
    }

    /**
     * @Route("/home/Pays-de-la-Loire", name="PDL")
     */
    public function PDL(Request $request, PaginatorInterface $paginator) {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->getRepository(Annonce::class)->createQueryBuilder('p')
                                                ->where('p.region = 12');
        $query = $qb->getQuery()->getResult();

        $PDL = $paginator->paginate($query, $request->query->getInt('page', 1), 6);
    
        return $this->render('region/pdl.html.twig', [
            'regPdl' => $PDL,
            'pagination' => $PDL,
        ]);
    }

    /**
     * @Route("/home/PACA", name="PAC")
     */
    public function PAC(Request $request, PaginatorInterface $paginator) {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->getRepository(Annonce::class)->createQueryBuilder('p')
                                                ->where('p.region = 13');
        $query = $qb->getQuery()->getResult();

        $PAC = $paginator->paginate($query, $request->query->getInt('page', 1), 6);
    
        return $this->render('region/pac.html.twig', [
            'regPac' => $PAC,
            'pagination' => $PAC,
        ]);
    }
}