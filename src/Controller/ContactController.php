<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    // protected function createForm(string $type, $data = null, array $options = array()): FormInterface
    public function index(Request $request)
    {
        $form = $this->createForm(ContactType::class);
        // return $this->render('contact/index.html.twig');
        $form->handleRequest($request);
        // dump($request);
        return $this->render('contact/index.html.twig', [
             'our_form' => $form->createView(),
               ]);
    }
}
