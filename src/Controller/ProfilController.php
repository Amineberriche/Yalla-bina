<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Form\RegistrationType;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     */
    public function index(Request $request): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            

            $this->addFlash('message', 'Profil mis à jour');
            return $this->redirectToRoute('profil');
        
    }
    return $this->render('profil/index.html.twig', [
        'updateform' => $form->createView()
    ]);
}
}