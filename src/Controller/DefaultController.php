<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Article;
use App\Repository\UserRepository;
use App\Repository\ArticleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/')]
class DefaultController extends AbstractController
{   
    #[Route('/', name: 'accueil_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {   
        return $this->render("default/index.html.twig", [
            'user' => $userRepository->findAll()
        ]);
    }


}