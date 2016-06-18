<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Movie;
use AppBundle\Form\MovieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MovieController extends Controller
{
    /**
     * @Route("/movies/new", name="movies_new")
     */
    public function newAction()
    {
        $movie = new Movie();

        $form = $this->createForm(new MovieType(), $movie);

        return $this->render('movie/new.html.twig', [
            'quote' => 'If my answers frighten you then you should cease asking scary questions. (Pulp Fiction)',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/movies", name="movies_list")
     */
    public function listAction()
    {
        return new Response('TODO');
    }
}
