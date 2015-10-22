<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('BlogBundle:Post');
        $posts = $repository->findAll();

        return $this->render('BlogBundle:Blog:index.html.twig', array(
            'posts' => $posts));
    }

    public function displayPostAction($id) {
    	//TODO display post
    	return $this->render('BlogBundle:Blog:index.html.twig', array('name' => "COUCOU LES REBORN"));
    }

    public function addPostAction() {
    	//Todo Form et insert
    	return $this->render('BlogBundle:Blog:index.html.twig', array('name' => "COUCOU LES REBORN"));
    }

    public function editPostAction($id) {
    	//Todo affichage form, remplissage et update
    	return $this->render('BlogBundle:Blog:index.html.twig', array('name' => "COUCOU LES REBORN"));
    }

    public function deletePost($id) {
    	//Todo delete post
    	return $this->render('BlogBundle:Blog:index.html.twig', array('name' => "COUCOU LES REBORN"));
    }
}
