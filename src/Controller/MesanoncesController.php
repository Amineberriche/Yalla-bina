<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Traget;
use App\Form\PropertySearchType;
use App\Repository\TragetRepository;

class MesanoncesController extends AbstractController
{
    /**
     * @Route("/mesanonces", name="mesanonces")
     */
    public function index(Request $request,TragetRepository $tragetRepository, PaginatorInterface $paginator): Response
    {
        $user = $this->getUser();
         $annonces = $tragetRepository->findBy(array('user'=>$user));

         $annonces = $paginator->paginate(
             $annonces,
             $request->query->getInt('page',1),
             5
         );
        return $this->render('mesanonces/index.html.twig', [
            'annonces' => $annonces,
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete_annonce")
     * 
     * @return Response
     */    
    public function delete (Traget $traget){
        $entityManager = $this->getDoctrine()->getManager();
         $entityManager -> remove($traget);
         $entityManager -> flush();

         return $this->redirectToRoute('mesanonces');
        ;
    }
}
