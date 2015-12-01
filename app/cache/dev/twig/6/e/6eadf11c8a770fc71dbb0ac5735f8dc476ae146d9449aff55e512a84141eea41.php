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
        $__internal_a0e19f2e9f431f0ef5b9f28f557342113a45f27fdccdcb91d6030a6af5ec4012 = $this->env->getExtension("native_profiler");
        $__internal_a0e19f2e9f431f0ef5b9f28f557342113a45f27fdccdcb91d6030a6af5ec4012->enter($__internal_a0e19f2e9f431f0ef5b9f28f557342113a45f27fdccdcb91d6030a6af5ec4012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0e19f2e9f431f0ef5b9f28f557342113a45f27fdccdcb91d6030a6af5ec4012->leave($__internal_a0e19f2e9f431f0ef5b9f28f557342113a45f27fdccdcb91d6030a6af5ec4012_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b99c0a56b6aa72ef0a86fb6166d94f4f5b6b89aca0b8b3bf81f84d8c9982147 = $this->env->getExtension("native_profiler");
        $__internal_2b99c0a56b6aa72ef0a86fb6166d94f4f5b6b89aca0b8b3bf81f84d8c9982147->enter($__internal_2b99c0a56b6aa72ef0a86fb6166d94f4f5b6b89aca0b8b3bf81f84d8c9982147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2b99c0a56b6aa72ef0a86fb6166d94f4f5b6b89aca0b8b3bf81f84d8c9982147->leave($__internal_2b99c0a56b6aa72ef0a86fb6166d94f4f5b6b89aca0b8b3bf81f84d8c9982147_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_080051d2d3db53e3e282ae0f8522a1a6183593be8f792694d1c91023497148bb = $this->env->getExtension("native_profiler");
        $__internal_080051d2d3db53e3e282ae0f8522a1a6183593be8f792694d1c91023497148bb->enter($__internal_080051d2d3db53e3e282ae0f8522a1a6183593be8f792694d1c91023497148bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_080051d2d3db53e3e282ae0f8522a1a6183593be8f792694d1c91023497148bb->leave($__internal_080051d2d3db53e3e282ae0f8522a1a6183593be8f792694d1c91023497148bb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ec9712029b2e913c194058909533930b9f58a96bb118604316122e4af36121d = $this->env->getExtension("native_profiler");
        $__internal_5ec9712029b2e913c194058909533930b9f58a96bb118604316122e4af36121d->enter($__internal_5ec9712029b2e913c194058909533930b9f58a96bb118604316122e4af36121d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5ec9712029b2e913c194058909533930b9f58a96bb118604316122e4af36121d->leave($__internal_5ec9712029b2e913c194058909533930b9f58a96bb118604316122e4af36121d_prof);

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
