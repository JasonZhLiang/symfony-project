<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;



//symfony welcome.html.php page only shows if you don't have any routes configured.
//If your app needs to return HTML, one great tool Twig can be used, make the work easier.
//As soon as you want to render a template, you need to extend a base class: AbstractController
//class ArticleController

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('my first page already! with annotation package installed');
    }

//    /**
//     * @Route("/news/why-asteroids-tast-like-bacon")
//     */
//    public function show()
//    {
//        return new Response('Future page to show one space article!');
//    }

    /**
     * @Route("/php")
     */
    public function php()
    {
        return new Response(phpinfo().'php info');
    }



    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf('Future page to show the article: %s', $slug));
    }

    /**
     * @Route("/article/{slug}")
     */
    public function article($slug)
    {
        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon.',
            'Woohoo! I\'m going on an all-asteriod diet!',
            'I like bacon too! Buy some form my site!'
        ];
        return $this->render('article/show.html.twig',[
            'title'=>ucwords(str_replace('-',' ',$slug)),
            'comments'=>$comments,
        ]);
    }



}

