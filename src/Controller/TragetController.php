<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use App\Form\TragetType;
use App\Entity\Traget;


class TragetController extends AbstractController
{
    /**
     * @Route("/traget", name="traget")
     */
    public function new(Request $request , Security $sec): Response
    {
        $traget = new Traget();
        $form = $this->createForm(TragetType::class, $traget);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){

            $entityManager = $this->getDoctrine()->getManager();
            $user = $this->getUser();
            $traget -> setUser($user);
            $entityManager->persist($traget);
            $entityManager->flush();
            
            return $this->redirectToRoute('accueil');

        }
        return $this->render('traget/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
