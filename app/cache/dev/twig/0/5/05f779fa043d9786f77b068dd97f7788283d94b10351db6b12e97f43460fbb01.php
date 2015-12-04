<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_5383d4d95683bc8e8c608c4b39a85609b26aa5e2af6c577d76ea7b276c219eb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7eec08466971ba84b68dc39688b503d31bcd8e2b91dc43ae346b88fa6d20ffa = $this->env->getExtension("native_profiler");
        $__internal_c7eec08466971ba84b68dc39688b503d31bcd8e2b91dc43ae346b88fa6d20ffa->enter($__internal_c7eec08466971ba84b68dc39688b503d31bcd8e2b91dc43ae346b88fa6d20ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7eec08466971ba84b68dc39688b503d31bcd8e2b91dc43ae346b88fa6d20ffa->leave($__internal_c7eec08466971ba84b68dc39688b503d31bcd8e2b91dc43ae346b88fa6d20ffa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6795229541add00df22b89ffad7c64bb2b76f0b4c51f5fba5428a73216161a8b = $this->env->getExtension("native_profiler");
        $__internal_6795229541add00df22b89ffad7c64bb2b76f0b4c51f5fba5428a73216161a8b->enter($__internal_6795229541add00df22b89ffad7c64bb2b76f0b4c51f5fba5428a73216161a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_6795229541add00df22b89ffad7c64bb2b76f0b4c51f5fba5428a73216161a8b->leave($__internal_6795229541add00df22b89ffad7c64bb2b76f0b4c51f5fba5428a73216161a8b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
