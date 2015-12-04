<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Comment;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    public function indexAction()
    {
        $repo = $this->getDoctrine()->getRepository('BlogBundle:Post');
        $posts = $repo->findBy(array(),array('datePublication' => 'DESC'),5);
        $count = $repo->createQueryBuilder('post')->select('COUNT(post)')->getQuery()->getSingleScalarResult();
        $count = ceil($count/5);

        $query = "SELECT p.id, count(comment.id) as nombre FROM post p LEFT JOIN comment ON p.id = comment.post_id GROUP BY p.id";
        $stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll();
        $retour = array();
        foreach ($results as $row) {
            $retour[$row['id']] = $row['nombre'];
        }

        $boolAffichPagin = true;
        if($count == 0)
        {
            $boolAffichPagin = false;
        }

        return $this->render('BlogBundle:Blog:index.html.twig', array(
            'posts' => $posts,
            'pagination' => $boolAffichPagin,
            'count' => $count,
            'countComms' => $retour));
    }

    public function pageXAction($value) {
        //Page/2, on prend de 11 a 20. Donc 2x10 = 20 -9 = 11

        $depart = ($value-1) * 5;

        $repository = $this->getDoctrine()->getRepository('BlogBundle:Post');
        $posts = $repository->findBy(array(), array('datePublication' => 'DESC'), 5, $depart);

        $count = $repository->createQueryBuilder('post')->select('COUNT(post)')->getQuery()->getSingleScalarResult();
        $count = ceil($count/5);

        $query = "SELECT p.id, count(comment.id) as nombre FROM post p LEFT JOIN comment ON p.id = comment.post_id GROUP BY p.id";
        $stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll();
        $retour = array();
        foreach ($results as $row) {
            $retour[$row['id']] = $row['nombre'];
        }

        $boolAffichPagin = true;
        if($count == 0)
        {
            $boolAffichPagin = false;
        }

        return $this->render('BlogBundle:Blog:index.html.twig', array(
            'posts' => $posts,
            'pagination' => $boolAffichPagin,
            'countComms' => $retour,
            'count' => $count));
    }

    public function displayPostAction(Request $request,$id) {
        $repo = $this->getDoctrine()->getRepository('BlogBundle:Post');
        $post = $repo->find($id);
        $comments = $post->getComments();
        $count = sizeof($comments); 

        $comment = new Comment();
        $formBuilder = $this->get('form.factory')->createBuilder('form',$comment);
        $formBuilder
                ->add('commentaire', 'textarea', array('required' => true))
                ->add('envoyer','submit');
        $form = $formBuilder->getForm();

        if($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //Récuppération du current user
            $currentUser = $this->container->get('security.context')->getToken()->getUser();
            if ($currentUser != 'anon.') {
                $comment->setUser($currentUser);
                $comment->setPost($post);
                $comment->setDatePublication(new \DateTime());
                $em->persist($comment);
                $em->flush();
                return $this->redirect($this->generateUrl('blog_afficheOnePost', array('id'=>$id)));
            }
           
        }

            return $this->render('BlogBundle:Blog:affiche.html.twig', array(
            'post' => $post,
            'form'=>$form->createView(),
            'comments'=>$comments,
            'count' => $count
            ));

    	
    }


}
