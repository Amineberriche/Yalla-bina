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
use App\Form\ReservationType;
use App\Entity\Reservation;


class AnoncesController extends AbstractController
{
    /**
     * @Route("/anonces", name="anonces")
     */
    public function index(Request $request,TragetRepository $tragetRepository, PaginatorInterface $paginator): Response
    {
        $reservation = new Reservation();
        $user = $this->getUser();
         $tragets = $tragetRepository->findAll();

         $tragets = $paginator->paginate(
             $tragets,
             $request->query->getInt('page',1),
             5
         );

         $form = $this->createForm(ReservationType::class, $reservation);
         $form->handleRequest($request);
         if($form->isSubmitted()&& $form->isValid()){
            $id = $request -> request->get('tragetid');
            $nbr = $request -> request->get('nbrplaces');
             $entityManager = $this->getDoctrine()->getManager();
             $reserv = $reservation->getIdTraget();
             $traget = $tragetRepository->find(array('id_traget'=>$id));
             $reservation->setNbrplaces($nbr);
             $reservation->setIdTraget($traget);
             $reservation -> setUser($user);
             $entityManager->persist($reservation);
             $entityManager->flush();
             
             return $this->redirectToRoute('accueil');
            }
         
        return $this->render('anonces/index.html.twig', [
            "tragets" => $tragets,
            'form' => $form->createView(),
            ]);
        
    }
}