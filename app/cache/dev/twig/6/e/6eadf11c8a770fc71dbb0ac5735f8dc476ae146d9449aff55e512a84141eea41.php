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
        $__internal_35760a9683d96b7c6978abafefbd3f55146fc8fd079fe86c14ca836631e0f34e = $this->env->getExtension("native_profiler");
        $__internal_35760a9683d96b7c6978abafefbd3f55146fc8fd079fe86c14ca836631e0f34e->enter($__internal_35760a9683d96b7c6978abafefbd3f55146fc8fd079fe86c14ca836631e0f34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35760a9683d96b7c6978abafefbd3f55146fc8fd079fe86c14ca836631e0f34e->leave($__internal_35760a9683d96b7c6978abafefbd3f55146fc8fd079fe86c14ca836631e0f34e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_234f2cabbc77fd8964f03cc8e03fd60f16c58a7d45c73d706cfd495e278f39b5 = $this->env->getExtension("native_profiler");
        $__internal_234f2cabbc77fd8964f03cc8e03fd60f16c58a7d45c73d706cfd495e278f39b5->enter($__internal_234f2cabbc77fd8964f03cc8e03fd60f16c58a7d45c73d706cfd495e278f39b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_234f2cabbc77fd8964f03cc8e03fd60f16c58a7d45c73d706cfd495e278f39b5->leave($__internal_234f2cabbc77fd8964f03cc8e03fd60f16c58a7d45c73d706cfd495e278f39b5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_de1205b4db3559175bf2edf581dd817c2938bf1f14b4b73ef9430ef03c412444 = $this->env->getExtension("native_profiler");
        $__internal_de1205b4db3559175bf2edf581dd817c2938bf1f14b4b73ef9430ef03c412444->enter($__internal_de1205b4db3559175bf2edf581dd817c2938bf1f14b4b73ef9430ef03c412444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_de1205b4db3559175bf2edf581dd817c2938bf1f14b4b73ef9430ef03c412444->leave($__internal_de1205b4db3559175bf2edf581dd817c2938bf1f14b4b73ef9430ef03c412444_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cbb3bf91cf21376b83a8b278e5111f91a9ad034bb26956520aaefba52b30ffe = $this->env->getExtension("native_profiler");
        $__internal_2cbb3bf91cf21376b83a8b278e5111f91a9ad034bb26956520aaefba52b30ffe->enter($__internal_2cbb3bf91cf21376b83a8b278e5111f91a9ad034bb26956520aaefba52b30ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2cbb3bf91cf21376b83a8b278e5111f91a9ad034bb26956520aaefba52b30ffe->leave($__internal_2cbb3bf91cf21376b83a8b278e5111f91a9ad034bb26956520aaefba52b30ffe_prof);

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
