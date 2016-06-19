<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Movie;
use AppBundle\Form\MovieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class MovieController extends BaseController
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
            $em = $this->getEntityManager();
            $em->persist($movie);
            $em->flush();

            $message = 'Sam would be proud';
            $this->addFlash('success', $message);
            $this->redirectToRoute('movies_list', array());
        }

        return $this->render('movie/new.html.twig', [
                'quote' => 'If my answers frighten you then you should cease asking scary questions. (Pulp Fiction)',
                'form' => $form->createView()
            ]
        );
    }

    /**
     * @Route("/movies", name="movies_list")
     */
    public function listAction()
    {
        $em = $this->getEntityManager();
        $movies = $em->getRepository('AppBundle:Movie')
            ->findAll();

        return $this->render('movie/list.html.twig', array(
            'movies' => $movies
        ));
    }
}
