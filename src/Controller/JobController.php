<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class JobController extends AbstractController{
    public function index(){
        $offre = new \stdClass();
        $offre->title ="On cherche un petit dev pas piqué des annetons";
        $offre->description ="lorem ipsum doloret at emmet";
        
        return $this->render('job/index.html.twig', ['offre'=>$offre]);
    }
    public function jobOffer(){
        $offre = new \stdClass();
        $offre->title ="On cherche un petit dev pas piqué des annetons";
        $offre->description ="lorem ipsum doloret at emmet";
        
        return $this->render('job/jobOffer.html.twig', ['offre'=>$offre]);
    }
}

