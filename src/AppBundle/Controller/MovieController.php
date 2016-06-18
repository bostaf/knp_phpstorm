<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Movie;
use AppBundle\Form\MovieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MovieController extends Controller
{
    /**
     * @Route("/movies/new", name="movies_new")
     */
    public function newAction(Request $request)
    {
        $movie = new Movie();

        $form = $this->createForm(new MovieType(), $movie);
        $form->handleRequest($request);
        if ($form->isValid()) {
            // todo - do saving

            $this->addFlash('success', 'Sam would be proud');
            $this->redirectToRoute('movies_list', array());
        }

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
