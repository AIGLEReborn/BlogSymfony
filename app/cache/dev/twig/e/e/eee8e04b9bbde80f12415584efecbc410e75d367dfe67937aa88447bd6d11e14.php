<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f4e162ee5f8879036799a59860bcf7431b1e7f72c30709f41ee7380a0f774d52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_b897068f015a5e2a59662bbd0222117aa2111a58b16e7d0d1e0914221a9ca17f = $this->env->getExtension("native_profiler");
        $__internal_b897068f015a5e2a59662bbd0222117aa2111a58b16e7d0d1e0914221a9ca17f->enter($__internal_b897068f015a5e2a59662bbd0222117aa2111a58b16e7d0d1e0914221a9ca17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b897068f015a5e2a59662bbd0222117aa2111a58b16e7d0d1e0914221a9ca17f->leave($__internal_b897068f015a5e2a59662bbd0222117aa2111a58b16e7d0d1e0914221a9ca17f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca07dbf0c1722532134315a82a15d3348e4b90af2bfbff635886f8c6a859bcf2 = $this->env->getExtension("native_profiler");
        $__internal_ca07dbf0c1722532134315a82a15d3348e4b90af2bfbff635886f8c6a859bcf2->enter($__internal_ca07dbf0c1722532134315a82a15d3348e4b90af2bfbff635886f8c6a859bcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ca07dbf0c1722532134315a82a15d3348e4b90af2bfbff635886f8c6a859bcf2->leave($__internal_ca07dbf0c1722532134315a82a15d3348e4b90af2bfbff635886f8c6a859bcf2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
