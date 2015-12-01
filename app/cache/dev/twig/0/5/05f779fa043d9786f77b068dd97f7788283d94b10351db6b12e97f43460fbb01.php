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
        $__internal_e2c38a5ef87730ff5df07a3a7ef43b15a4dd409c8a34fac5d858796774681601 = $this->env->getExtension("native_profiler");
        $__internal_e2c38a5ef87730ff5df07a3a7ef43b15a4dd409c8a34fac5d858796774681601->enter($__internal_e2c38a5ef87730ff5df07a3a7ef43b15a4dd409c8a34fac5d858796774681601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2c38a5ef87730ff5df07a3a7ef43b15a4dd409c8a34fac5d858796774681601->leave($__internal_e2c38a5ef87730ff5df07a3a7ef43b15a4dd409c8a34fac5d858796774681601_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d538963855e9bcd91e3d56c59eba946a654cdaae2ff860e0162b79e0075fe84c = $this->env->getExtension("native_profiler");
        $__internal_d538963855e9bcd91e3d56c59eba946a654cdaae2ff860e0162b79e0075fe84c->enter($__internal_d538963855e9bcd91e3d56c59eba946a654cdaae2ff860e0162b79e0075fe84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_d538963855e9bcd91e3d56c59eba946a654cdaae2ff860e0162b79e0075fe84c->leave($__internal_d538963855e9bcd91e3d56c59eba946a654cdaae2ff860e0162b79e0075fe84c_prof);

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
