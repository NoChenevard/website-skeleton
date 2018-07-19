<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Routing\Annotation\Route;


class JobController extends AbstractController{

    /**
     * @Route("/", name="index")
     */

    public function index(){
        $offre = new \stdClass();
        $offre->title ="On cherche un petit dev pas piqué des annetons";
        $offre->description ="lorem ipsum doloret at emmet";
        
        return $this->render('job/index.html.twig', ['offre'=>$offre]);
    }
    /**
     * @Route("/job", name="job-detail")
     */
    public function jobOffer(){
        $offre = new \stdClass();
        $offre->title ="On cherche un petit dev pas piqué des annetons oui";
        $offre->description ="lorem ipsum doloret at emmet";
        
        return $this->render('job/jobOffer.html.twig', ['offre'=>$offre]);
    }
}

