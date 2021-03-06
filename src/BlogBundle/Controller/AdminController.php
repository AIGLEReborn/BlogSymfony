<?php

namespace BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Post;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    public function indexAction()
    {}


    /**
     * @Route("/admin/add", name="admin_AddPost")
     */
    public function addPostAction(Request $request) {
        
        $post = new Post();
        $formBuilder = $this->get('form.factory')->createBuilder('form', $post);
        $formBuilder
            ->setAction($this->generateUrl('admin_AddPost'))/*Fix Validator W3C*/
            ->add('titre', 'text', array('required' => true))
            ->add('contenu', 'textarea', array('required' => true))
            ->add('datePublication', 'datetime', array('date_widget' => "single_text", 'time_widget' => "single_text",'required' => true))
            ->add('Valider', 'submit');

        $form = $formBuilder->getForm();

        if ($form->handleRequest($request)->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $user = $this->container->get('security.context')->getToken()->getUser();
            $post->setUrl("#");
            $post->setAuthor($user);
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('blog_afficheOnePost', array('id' => $post->getId()));

        }

        return $this->render('BlogBundle:Blog:addPost.html.twig', array('form' => $form->createView()));
    }


    /**
     * @Route("/admin/Edit/{id}", name="admin_EditPost")
     */
    public function editPostAction($id, Request $request) {
        
        $repository = $this->getDoctrine()->getRepository('BlogBundle:Post');
        $post = $repository->find($id);

        $formBuilder = $this->get('form.factory')->createBuilder('form', $post);
        $formBuilder
            ->setAction($this->generateUrl('admin_EditPost'))/*Fix Validator W3C*/
            ->add('titre', 'text', array('required' => true, 'label' => $post->getTitre()))
            ->add('contenu', 'textarea', array('required' => true, 'label' => $post->getContenu()))
            ->add('datePublication', 'datetime', array('date_widget' => "single_text", 'time_widget' => "single_text",'required' => true, 'label' => $post->getDatePublication()))
            ->add('Valider', 'submit');

        $form = $formBuilder->getForm();

        if ($form->handleRequest($request)->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Article modifié');

            return $this->redirectToRoute('blog_afficheOnePost', array('id' => $post->getId()));

        }

        return $this->render('BlogBundle:Blog:editPost.html.twig', array('form' => $form->createView(), 'post' => $post));
    }


    /**
     * @Route("/admin/Delete/{id}", name="admin_DeletePost")
     */
    public function deletePostAction($id) {
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('BlogBundle:Post');
        $post = $repository->find($id);
        $em->remove($post);
        $em->flush();

        return $this->redirectToRoute('blog_homepage');
    }


    /**
     * @Route("/admin/EditComment/{idP}/{id}", name="admin_EditComment")
     */
    public function editCommentAction($idP,$id, Request $request) {

        
        $manager = $this->getDoctrine()->getManager();
        $query = $manager->createQuery(
            ' SELECT c
            FROM BlogBundle:Comment c
            WHERE c.id = :id'
            )->setParameter('id',$id);

        $comment = $query->getResult();
        $c = $comment[0];

        $formBuilder = $this->get('form.factory')->createBuilder('form',$c);
        $formBuilder
                ->setAction($this->generateUrl('admin_EditComment',array('idP' => $idP,'id' => $id)))/*Fix Validator W3C*/
                ->add('commentaire', 'textarea', array('required' => true))
                ->add('add','submit');
        $form = $formBuilder->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($c);
            $em->flush();

            return $this->redirect($this->generateUrl('blog_afficheOnePost', array('id'=>$idP)));
        }

        return $this->render('BlogBundle:Blog:editComment.html.twig', array('form' => $form->createView()));
    }


    /**
     * @Route("/admin/DeleteComment/{idP}/{id}", name="admin_DeleteComment")
     */
    public function deleteCommentAction($idP,$id, Request $request) {

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
        return $this->redirect($this->generateUrl('blog_afficheOnePost', array('id'=>$idP)));
    }
    
    /**
     * @Route("/admin/addAdmin", name="admin_AddAdmin")
     */
    public function addAdminAction(Request $request) {
        $data = array();
        $form = $this->createFormBuilder($data)
        ->setAction($this->generateUrl('admin_AddAdmin'))/*Fix Validator W3C*/
        ->add('user', 'text')
        ->add('Valider', 'submit')
        ->getForm();
 
        if ($form->handleRequest($request)->isValid()) {

            $userManager = $this->get('fos_user.user_manager');
            $data = $form->getData();
            $user = $userManager->findUserByUsername($data['user']);
            if ($user !== null) {
                $user->setRoles(array('ROLE_ADMIN'));
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                return $this->render('BlogBundle:Blog:addAdminDone.html.twig', array('afficherFlash'=>1,'typeFlash'=>'success','flash'=> 'L\'utilisateur à été désigné comme un admin. Il peut saisir des articles et moderer des articles/commentaires!'));
            } else {
                return $this->render('BlogBundle:Blog:addAdminDone.html.twig', array('afficherFlash'=>1,'typeFlash'=>'warning','flash'=> 'Echet !'));
            }
           
        }
 
        return $this->render('BlogBundle:Blog:addAdmin.html.twig', array('form' => $form->createView()));
    }

}
