<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    #[Route('/somme/{A}/{B}', name: 'app_somme')]
    public function somme($A,$B): Response
    { $som=$A+$B;
        return $this->render('calcul/somme.html.twig', ['a'=>$A,'b'=>$B,'s'=>$som]);
    }
    #[Route('/sous/{A}/{B}', name: 'app_sous')]
    public function sous($A,$B): Response
    { $sous=$A-$B;
        return $this->render('calcul/sous.html.twig', ['a'=>$A,'b'=>$B,'s'=>$sous]);
    }
    #[Route('/home', name: 'app_home')]
    public function accueil(): Response
    {
        return $this->render('calcul/accueil.html.twig');
    }
}
