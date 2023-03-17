<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {

        return new Response("Welcome");
    }
    #[Route('/blog/{id<\d+>}/{name?vide}', name: 'blog_detail')]
    public function detail($id,$name): Response
    {
      return $this->render("blog/detail.html.twig",['id'=>$id,'name'=>$name]);
    }
    #[Route('/blog/{id<\d+>}/{name}', name: 'blog_detail2',priority:1)]
    public function detail2($id,$name): Response
    {
        return new Response("le nom de l'article $id est $name");
    }
    #[Route('/blog/test', name: 'blog_test')]
    public function someMethod(): Response
    {
       /* $url=$this->generateUrl('blog_detail2',['id'=>100,'name'=>'Symfony']);
       // dd($url);
       return $this->redirect($url);*/
        return $this->redirectToRoute('blog_detail2',['id'=>100,'name'=>'Symfony']);
    }
}
