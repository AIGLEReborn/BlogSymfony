<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // blog_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'blog_homepage');
            }

            return array (  '_controller' => 'BlogBundle\\Controller\\BlogController::indexAction',  '_route' => 'blog_homepage',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // blog_pageX
            if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<value>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_pageX')), array (  '_controller' => 'BlogBundle\\Controller\\BlogController::pageXAction',));
            }

            // blog_afficheOnePost
            if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_afficheOnePost')), array (  '_controller' => 'BlogBundle\\Controller\\BlogController::displayPostAction',));
            }

        }

        // blog_AddPost
        if ($pathinfo === '/add') {
            return array (  '_controller' => 'BlogBundle\\Controller\\BlogController::addPostAction',  '_route' => 'blog_AddPost',);
        }

        // blog_EditPost
        if (0 === strpos($pathinfo, '/Edit') && preg_match('#^/Edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_EditPost')), array (  '_controller' => 'BlogBundle\\Controller\\BlogController::editPostAction',));
        }

        // blog_DeletePost
        if (0 === strpos($pathinfo, '/Delete') && preg_match('#^/Delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_DeletePost')), array (  '_controller' => 'BlogBundle\\Controller\\BlogController::deletePostAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
