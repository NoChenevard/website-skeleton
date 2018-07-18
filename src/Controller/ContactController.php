<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    // protected function createForm(string $type, $data = null, array $options = array()): FormInterface
    public function index()
    {
        $form = $this->createForm(ContactType::class);
        // return $this->render('contact/index.html.twig');
        return $this->render('contact/index.html.twig', [
             'our_form' => $form->createView(),
               ]);
    }
}
