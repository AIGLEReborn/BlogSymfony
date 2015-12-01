<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Post;
use BlogBundle\Entity\Comment;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;

class BlogController extends Controller
{
    public function indexAction()
    {
        $repo = $this->getDoctrine()->getRepository('BlogBundle:Post');
        $posts = $repo->findBy(array(), null, 10);
        $count = $repo->createQueryBuilder('post')->select('COUNT(post)')->getQuery()->getSingleScalarResult();
        $count = ceil($count/10);
        return $this->render('BlogBundle:Blog:index.html.twig', array(
            'posts' => $posts,
            'count' => $count));
    }

    public function pageXAction($value) {
        //Page/2, on prend de 11 a 20. Donc 2x10 = 20 -9 = 11

        $depart = ($value-1) * 10;

        $repository = $this->getDoctrine()->getRepository('BlogBundle:Post');
        $posts = $repository->findBy(array(), array(), 10, $depart);

        $count = $repository->createQueryBuilder('post')->select('COUNT(post)')->getQuery()->getSingleScalarResult();
        $count = ceil($count/10);

        return $this->render('BlogBundle:Blog:index.html.twig', array(
            'posts' => $posts,
            'count' => $count));
    }

    public function displayPostAction($id) {
        $repo = $this->getDoctrine()->getRepository('BlogBundle:Post');
        $post = $repo->find($id);
    	return $this->render('BlogBundle:Blog:affiche.html.twig', array('post' => $post));
    }

    public function addCommentAction(Request $request) {
        $commentaire = new Commentaire();
        $formBuilder = $this->get('form.factory')->createBuilder('form',$commentaire);
        $formBuilder
                ->add('Write a Comment', 'textarea', array('required' => true))
                ->add('Comment!','submit');
        $form = $formBuilder->getForm();

        if($form->handleRequest($Request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //Récuppération de l'id current user
            $currentUser = $this->container->get('security.context')->getToken()->getUser();
            $commentaire->setUser($currentUser);
            $em->persist($commentaire);
            $em->flush();
            return $this->render('BlogBundle:Blog:affiche.html.twig')
        }
    }

    public function addPostAction(Request $request) {
    	
        $post = new Post();
        $formBuilder = $this->get('form.factory')->createBuilder('form', $post);
        $formBuilder
            ->add('titre', 'text', array('required' => true))
            ->add('contenu', 'textarea', array('required' => true))
            ->add('datePublication', 'datetime', array('required' => true))
            ->add('Valider', 'submit');

        $form = $formBuilder->getForm();

        if ($form->handleRequest($request)->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $post->setUrl('JSP');
            $em->persist($post);
            $em->flush();
            return $this->render('BlogBundle:Blog:affiche.html.twig', array('post' => $post));
        }

    	return $this->render('BlogBundle:Blog:addPost.html.twig', array('form' => $form->createView()));
    }

    public function editPostAction($id, Request $request) {
    	//get de lu post actuel via l'id
        $repository = $this->getDoctrine()->getRepository('BlogBundle:Post');
        $post = $repository->find($id);

        $formBuilder = $this->get('form.factory')->createBuilder('form', $post);
        $formBuilder
            ->add('titre', 'text', array('required' => true, 'label' => $post->getTitre()))
            ->add('contenu', 'textarea', array('required' => true, 'label' => $post->getContenu()))
            ->add('datePublication', 'datetime', array('required' => true, 'label' => $post->getDatePublication()))
            ->add('Valider', 'submit');

        $form = $formBuilder->getForm();

        if ($form->handleRequest($request)->isValid()) {
            //Callback sur le submit
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Article modifié');

            return $this->render('BlogBundle:Blog:affiche.html.twig', array('post' => $post));
        }

    	return $this->render('BlogBundle:Blog:editPost.html.twig', array('form' => $form->createView(), 'post' => $post));
    }

    public function deletePostAction($id) {
        $em = $this->getDoctrine()->getManager();
    	$repository = $this->getDoctrine()->getRepository('BlogBundle:Post');
        $post = $repository->find($id);
        $em->remove($post);
        $em->flush();

    	return $this->redirectToRoute('blog_homepage');
    }

}
