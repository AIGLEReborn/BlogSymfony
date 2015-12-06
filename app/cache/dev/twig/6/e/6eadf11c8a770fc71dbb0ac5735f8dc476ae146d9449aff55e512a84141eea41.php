<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_565e344114bed4211487a32788c725b0483e14bfe5528c69acfa8a987bb42a7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3a9847235c9923311e3b21a8c853b933c2ac50ac5ff2c18bf7cbda81bf0bcb3 = $this->env->getExtension("native_profiler");
        $__internal_c3a9847235c9923311e3b21a8c853b933c2ac50ac5ff2c18bf7cbda81bf0bcb3->enter($__internal_c3a9847235c9923311e3b21a8c853b933c2ac50ac5ff2c18bf7cbda81bf0bcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3a9847235c9923311e3b21a8c853b933c2ac50ac5ff2c18bf7cbda81bf0bcb3->leave($__internal_c3a9847235c9923311e3b21a8c853b933c2ac50ac5ff2c18bf7cbda81bf0bcb3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b2063a6d96809df9325de8f46c19eb46d7b59ffcc7fade204382aa0d6fc8a372 = $this->env->getExtension("native_profiler");
        $__internal_b2063a6d96809df9325de8f46c19eb46d7b59ffcc7fade204382aa0d6fc8a372->enter($__internal_b2063a6d96809df9325de8f46c19eb46d7b59ffcc7fade204382aa0d6fc8a372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b2063a6d96809df9325de8f46c19eb46d7b59ffcc7fade204382aa0d6fc8a372->leave($__internal_b2063a6d96809df9325de8f46c19eb46d7b59ffcc7fade204382aa0d6fc8a372_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c1d081f75b3817ec2f5fc0ae2dda7bd42204057a4745857b38daf99b3bbb1ed = $this->env->getExtension("native_profiler");
        $__internal_3c1d081f75b3817ec2f5fc0ae2dda7bd42204057a4745857b38daf99b3bbb1ed->enter($__internal_3c1d081f75b3817ec2f5fc0ae2dda7bd42204057a4745857b38daf99b3bbb1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3c1d081f75b3817ec2f5fc0ae2dda7bd42204057a4745857b38daf99b3bbb1ed->leave($__internal_3c1d081f75b3817ec2f5fc0ae2dda7bd42204057a4745857b38daf99b3bbb1ed_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b065d0f5f469b2ba067139c8582f890c6093a0a9f9a01ff4192e53d6bc646ff7 = $this->env->getExtension("native_profiler");
        $__internal_b065d0f5f469b2ba067139c8582f890c6093a0a9f9a01ff4192e53d6bc646ff7->enter($__internal_b065d0f5f469b2ba067139c8582f890c6093a0a9f9a01ff4192e53d6bc646ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b065d0f5f469b2ba067139c8582f890c6093a0a9f9a01ff4192e53d6bc646ff7->leave($__internal_b065d0f5f469b2ba067139c8582f890c6093a0a9f9a01ff4192e53d6bc646ff7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
