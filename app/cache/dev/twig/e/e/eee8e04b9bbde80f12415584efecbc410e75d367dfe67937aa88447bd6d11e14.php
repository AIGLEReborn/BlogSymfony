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
        $__internal_f8b4cbd1daf8dbfca0684a32cc28078e297ffecc19c37c0c668b7bc26a5658f0 = $this->env->getExtension("native_profiler");
        $__internal_f8b4cbd1daf8dbfca0684a32cc28078e297ffecc19c37c0c668b7bc26a5658f0->enter($__internal_f8b4cbd1daf8dbfca0684a32cc28078e297ffecc19c37c0c668b7bc26a5658f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8b4cbd1daf8dbfca0684a32cc28078e297ffecc19c37c0c668b7bc26a5658f0->leave($__internal_f8b4cbd1daf8dbfca0684a32cc28078e297ffecc19c37c0c668b7bc26a5658f0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c408a5da8b58592b14c40f4d858001f5d3b4cb114010a44901e9e785a79aa4b0 = $this->env->getExtension("native_profiler");
        $__internal_c408a5da8b58592b14c40f4d858001f5d3b4cb114010a44901e9e785a79aa4b0->enter($__internal_c408a5da8b58592b14c40f4d858001f5d3b4cb114010a44901e9e785a79aa4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c408a5da8b58592b14c40f4d858001f5d3b4cb114010a44901e9e785a79aa4b0->leave($__internal_c408a5da8b58592b14c40f4d858001f5d3b4cb114010a44901e9e785a79aa4b0_prof);

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
