<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Traget;
use App\Entity\PropertySearch;
use App\Repository\TragetRepository;
use App\Form\PropertySearchType;
use App\Form\ReservationType;
use App\Entity\Reservation;


class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function searchtrajet(Request $request ,TragetRepository $tragetRepository ,PaginatorInterface $paginator) : response
    {
        $propertySearch = new PropertySearch();
        $form = $this->createForm(PropertySearchType::class,$propertySearch);
        $form->handleRequest($request);
       //initialement le tableau des articles est vide, 
       //c.a.d on affiche les articles que lorsque l'utilisateur clique sur le bouton rechercher
        $tragets= [];
        
       if($form->isSubmitted() && $form->isValid()) {
       //on récupère le nom d'article tapé dans le formulaire
        $dep = $propertySearch->getDepart();
        $arr = $propertySearch->getArrivee(); 
  //   $tragets= $this->getDoctrine()->getRepository(Traget::class)->findBy(array ("depart"=> $dep , "arrivee" => $arr));  dd($tragets);
        if ($dep!="" && $arr=="") 
          //si on a fourni un nom d'article on affiche tous les articles ayant ce nom
          $tragets= $this->getDoctrine()->getRepository(Traget::class)->findBy(['depart' => $dep] );
         elseif ($arr!="" && $dep=="") 
          //si on a fourni un nom d'article on affiche tous les articles ayant ce nom
          $tragets= $this->getDoctrine()->getRepository(Traget::class)->findBy(['arrivee' => $arr] );
          elseif ($arr!="" && $dep!="") 
          //si on a fourni un nom d'article on affiche tous les articles ayant ce nom
          $tragets= $this->getDoctrine()->getRepository(Traget::class)->findBy(['arrivee' => $arr , 'depart' => $dep ] );
        else   
          //si si aucun nom n'est fourni on affiche tous les articles
          $tragets= $this->getDoctrine()->getRepository(Traget::class)->findAll();
         }
       

       
         

        return $this->render('search/index.html.twig', [
            'tragets' => $tragets,
            'form'    => $form->createView(),
            

            
        ]);
    }
    /**
     * @Route("/reserveration", name="reserveration")
     */
    public function reserver ( Request $request ,TragetRepository $tragetRepository){

        $reservation = new Reservation();
        $user = $this->getUser();
        $formsearch = $this->createForm(ReservationType::class, $reservation);
        $formsearch->handleRequest($request);
           $id = $request -> request->get('tragetid');
           $nbr = $request -> request->get('nbrplaces');
            $entityManager = $this->getDoctrine()->getManager();
            $traget = $tragetRepository->find(array('id_traget'=>$id));
            $nv = $traget->getPassager()-$nbr;
            $traget -> setPassager($nv);
            $reservation->setNbrplaces($nbr);
            $reservation->setIdTraget($traget);
            $reservation -> setUser($user);
            $entityManager->persist($reservation);
            $entityManager->persist($traget);
            $entityManager->flush();
            
            return $this->redirectToRoute('search');


    }

}
