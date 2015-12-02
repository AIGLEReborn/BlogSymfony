<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Post;
use BlogBundle\Entity\User;
use BlogBundle\Entity\Comment;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Collections\ArrayCollection;

class BlogController extends Controller
{
    public function indexAction()
    {
        $repo = $this->getDoctrine()->getRepository('BlogBundle:Post');
        $posts = $repo->findBy(array(), null, 10);
        $count = $repo->createQueryBuilder('post')->select('COUNT(post)')->getQuery()->getSingleScalarResult();
        $count = ceil($count/10);

        $query = "SELECT p.id, count(comment.id) as nombre FROM post p LEFT JOIN comment ON p.id = comment.post_id GROUP BY p.id";
        $stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll();
        $retour = array();
        foreach ($results as $row) {
            $retour[$row['id']] = $row['nombre'];
        }

        return $this->render('BlogBundle:Blog:index.html.twig', array(
            'posts' => $posts,
            'count' => $count,
            'countComms' => $retour));
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

    public function displayPostAction(Request $request,$id) {
        $repo = $this->getDoctrine()->getRepository('BlogBundle:Post');
        $post = $repo->find($id);

        $comments = $post->getComments();
        $count = sizeof($comments); 
        /*$manager = $this->getDoctrine()->getManager();
        $query = $manager->createQuery(
            ' SELECT c
            FROM BlogBundle:Comment c
            WHERE c.post = :id'
            )->setParameter('id',$id);
        $comments = $query->getResult();

        $repo = $this->getDoctrine()->getRepository('BlogBundle:Comment');
        $count = $repo->createQueryBuilder('comment')->select('COUNT(comment)')->getQuery()->getSingleScalarResult();*/


        $comment = new Comment();
        $comment->setPost($post);
        $formBuilder = $this->get('form.factory')->createBuilder('form',$comment);
        $formBuilder
                ->add('commentaire', 'textarea', array('required' => true))
                ->add('add','submit');
        $form = $formBuilder->getForm();

        if($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //Récuppération du current user
            $currentUser = $this->container->get('security.context')->getToken()->getUser();
            if ($currentUser != 'anon.') {
                $comment->setUser($currentUser);
                $em->persist($comment);
                $em->flush();

                //Raffraichissement des infos
                //$comments[] = $comment;
                $comments = $post->getComments();
                //$count++;
                $count = sizeof($comments);

                return $this->render('BlogBundle:Blog:affiche.html.twig', array(
                'post' => $post,
                'form'=>$form->createView(),
                'comments'=>$comments,
                'count' => $count
                ));
            }
           
        }

    	return $this->render('BlogBundle:Blog:affiche.html.twig', array(
            'post' => $post,
            'form'=>$form->createView(),
            'comments'=>$comments,
            'count' => $count
            ));
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
            //return $this->render('BlogBundle:Blog:affiche.html.twig', array('post' => $post));
            return $this->redirectToRoute('blog_afficheOnePost', array('id' => $post->getId()));
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

            return $this->redirectToRoute('blog_afficheOnePost', array('id' => $post->getId()));

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

    public function editCommentAction($id, Request $request) {

        //Get du comm via l'id
        $manager = $this->getDoctrine()->getManager();
        $query = $manager->createQuery(
            ' SELECT c
            FROM BlogBundle:Comment c
            WHERE c.id = :id'
            )->setParameter('id',$id);

        $comment = $query->getResult();
        $c = $comment[0];



        //Faire le form
        $formBuilder = $this->get('form.factory')->createBuilder('form',$c);
        $formBuilder
                ->add('commentaire', 'textarea', array('required' => true))
                ->add('add','submit');
        $form = $formBuilder->getForm();

        if ($form->handleRequest($request)->isValid()) {
            //Callback sur le submit
            $em = $this->getDoctrine()->getManager();
            $em->persist($c);
            $em->flush();

            //$request->getSession()->getFlashBag()->add('notice', 'Article modifié');

            return $this->redirectToRoute('blog_homepage');
        }

        return $this->render('BlogBundle:Blog:editComment.html.twig', array('form' => $form->createView()));
    }

    public function deleteCommentAction($id, Request $request) {
        $manager = $this->getDoctrine()->getManager();
        $query = $manager->createQuery(
            ' SELECT c
            FROM BlogBundle:Comment c
            WHERE c.id = :id'
            )->setParameter('id',$id);

        $comment = $query->getResult();
        
        if (sizeof($comment) != 0) {
            $c = $comment[0];
            $em = $this->getDoctrine()->getManager();
            $em->remove($c);
            $em->flush();
        }
        
        //TODO : Refresh sur la page actuelle.. JSPfaire
        return $this->redirectToRoute('blog_homepage');
    }

}
