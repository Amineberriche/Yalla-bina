<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ReservationType;
use App\Entity\Reservation;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ReservationRepository;
use Knp\Component\Pager\PaginatorInterface;


class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function index(Request $request,ReservationRepository $reservationRepository, PaginatorInterface $paginator): Response
    {
        $user = $this->getUser();
        $annonces = $reservationRepository->findBy(array('user'=>$user));

        $annonces = $paginator->paginate(
            $annonces,
            $request->query->getInt('page',1),
            5
        );
        return $this->render('reservation/index.html.twig', [
            'annonces' => $annonces,
        ]);
    }
    /**
     * @Route("/delette/{id}", name="delete_reservation")
     * 
     * @return Response
     */    
    public function delete (Reservation $reservation){
        $entityManager = $this->getDoctrine()->getManager();
         $entityManager -> remove($reservation);
         $entityManager -> flush();

         return $this->redirectToRoute('reservation');
        ;
    }
}
