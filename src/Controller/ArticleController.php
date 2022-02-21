<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController {

    /**
     * Redirects into article list page
     * @return Response
     */
    #[Route("/", name: "article_list")]
    public function list():Response {
        $articles = [
            ["id" => 1, "author" => "Anonymous", "content" => "“ Exige beaucoup de toi-même et attends peu des autres. Ainsi beaucoup d'ennuis te seront épargnés !” :-)"],
            ["id" => 2, "author" => "Gandhi", "content" => "“ La vie est un mystère qu'il faut vivre, et non un problème à résoudre.” ;-)"],
            ["id" => 3, "author" => "Victor Hugo", "content" => "“ On passe une moitié de sa vie à attendre ceux qu'on aimera et l'autre moitié à quitter ceux qu'on aime.” :-|"],
            ["id" => 4, "author" => "Anonymous", "content" => "“ Tout arrive à qui sait attendre. La mort, par exemple.” :poop: "],
        ];

        return $this->render('article/list.html.twig', ["listArticle" => $articles]);
    }
}