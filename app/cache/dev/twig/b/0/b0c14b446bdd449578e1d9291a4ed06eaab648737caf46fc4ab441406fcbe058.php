<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6bf9051e92fae2a00ae1a2a02d9f610f24f765fe9fa1c9b227847a49e782ca4f extends Twig_Template
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
        $__internal_ac5641fb7abc676f493f12f661ba80af75cc37822e88649027bcd5d28ac1c054 = $this->env->getExtension("native_profiler");
        $__internal_ac5641fb7abc676f493f12f661ba80af75cc37822e88649027bcd5d28ac1c054->enter($__internal_ac5641fb7abc676f493f12f661ba80af75cc37822e88649027bcd5d28ac1c054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac5641fb7abc676f493f12f661ba80af75cc37822e88649027bcd5d28ac1c054->leave($__internal_ac5641fb7abc676f493f12f661ba80af75cc37822e88649027bcd5d28ac1c054_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f4f6596baae67d5298060c41adf35e6ae40de5049787fb145d46db1a322b4e7 = $this->env->getExtension("native_profiler");
        $__internal_3f4f6596baae67d5298060c41adf35e6ae40de5049787fb145d46db1a322b4e7->enter($__internal_3f4f6596baae67d5298060c41adf35e6ae40de5049787fb145d46db1a322b4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3f4f6596baae67d5298060c41adf35e6ae40de5049787fb145d46db1a322b4e7->leave($__internal_3f4f6596baae67d5298060c41adf35e6ae40de5049787fb145d46db1a322b4e7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f332ad5c46500b4537eb9dd18c0e77960da403e6719733bd9cae8b0ea02adf3d = $this->env->getExtension("native_profiler");
        $__internal_f332ad5c46500b4537eb9dd18c0e77960da403e6719733bd9cae8b0ea02adf3d->enter($__internal_f332ad5c46500b4537eb9dd18c0e77960da403e6719733bd9cae8b0ea02adf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f332ad5c46500b4537eb9dd18c0e77960da403e6719733bd9cae8b0ea02adf3d->leave($__internal_f332ad5c46500b4537eb9dd18c0e77960da403e6719733bd9cae8b0ea02adf3d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_324072bc0f6781c760c4e86260246b31fa8e699dc5669e9eb795275f0df8bf8e = $this->env->getExtension("native_profiler");
        $__internal_324072bc0f6781c760c4e86260246b31fa8e699dc5669e9eb795275f0df8bf8e->enter($__internal_324072bc0f6781c760c4e86260246b31fa8e699dc5669e9eb795275f0df8bf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_324072bc0f6781c760c4e86260246b31fa8e699dc5669e9eb795275f0df8bf8e->leave($__internal_324072bc0f6781c760c4e86260246b31fa8e699dc5669e9eb795275f0df8bf8e_prof);

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
