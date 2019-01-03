<?php


namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;



//symfony welcome.html.php page only shows if you don't have any routes configured.

class ArticleController
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
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf('Future page to show the article: %s', $slug));
    }

    /**
     * @Route("/php")
     */
    public function php()
    {
        return new Response(phpinfo().'php info');
    }
}

