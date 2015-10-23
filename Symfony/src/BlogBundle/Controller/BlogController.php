<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\CRUD\CrudPost;
use BlogBundle\Entity\Post;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('BlogBundle:Post');
        $posts = $repository->findBy(array(), null, 10, null);

        /*$CRUD = $this->container->get('BlogBundle.CRUD.Post');
        $posts = $CRUD->getAll('0','10');*/

        return $this->render('BlogBundle:Blog:index.html.twig', array(
            'posts' => $posts));
    }

    public function pageXAction($value) {
        //Page/2, on prend de 11 a 20. Donc 2x10 = 20 -9 = 11
        //Page/3, on prend de 21 a 30. Donc 3x10 = 30 - 9 = 21
        $depart = ($value * 10) -9;
        $arrive = $value * 10;

        $repository = $this->getDoctrine()->getRepository('BlogBundle:Post');
        $posts = $repository->findBy(array(), null, 10, null);

        return $this->render('BlogBundle:Blog:index.html.twig', array(
            'posts' => $posts));
    }

    public function displayPostAction($id) {

        $repository = $this->getDoctrine()->getRepository('BlogBundle:Post');
        $post = $repository->find($id);

    	return $this->render('BlogBundle:Blog:affiche.html.twig', array('post' => $post));
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
            //Callback sur le submit
            $data = $form->getData();
            
            //Methode sans CRUD
            $em = $this->getDoctrine()->getManager();
            $post->setUrl('JSP');
            $em->persist($post);
            $em->flush();

            //CRUD
            /*$CRUD = $this->container->get('BlogBundle.CRUD.CRUD');
            if ($CRUD->creer($data['titre']) != null) {
                //Succes
                $request->getSession()->getFlashBag()->add('notice', 'Article enregistré');
                return $this->render('BlogBundle:Blog:affiche.html.twig', array('post' => $post));
            } else {
                //Erreur...
                //Que faire ?
            }*/
           

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
    	$repository = $this->getDoctrine()->getRepository('BlogBundle:Post');
        $post = $repository->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($post);
        $em->flush();

    	return $this->redirectToRoute('blog_homepage');
    }
}
