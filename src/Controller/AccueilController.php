<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\TragetRepository;


class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(Request $request,TragetRepository $tragetRepository, PaginatorInterface $paginator): Response
    {
        $user = $this->getUser();
        $annonces = $tragetRepository->findAll();
        $count=count($annonces);
        return $this->render('accueil/index.html.twig', [
            'annonces' => $annonces,
        ]);
    }
}
