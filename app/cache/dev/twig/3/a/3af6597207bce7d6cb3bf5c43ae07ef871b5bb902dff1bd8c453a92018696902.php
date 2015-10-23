<?php

/* BlogBundle:Blog:affiche.html.twig */
class __TwigTemplate_15ca910da8c32d647fca702f869975a6e5e86e305a8cab11f7df8a27f1b39bd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "BlogBundle:Blog:affiche.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45cd6bcd710b951395fb2e74fcadd8f1b4fb19da8b94bb7aa3c38247a9351769 = $this->env->getExtension("native_profiler");
        $__internal_45cd6bcd710b951395fb2e74fcadd8f1b4fb19da8b94bb7aa3c38247a9351769->enter($__internal_45cd6bcd710b951395fb2e74fcadd8f1b4fb19da8b94bb7aa3c38247a9351769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45cd6bcd710b951395fb2e74fcadd8f1b4fb19da8b94bb7aa3c38247a9351769->leave($__internal_45cd6bcd710b951395fb2e74fcadd8f1b4fb19da8b94bb7aa3c38247a9351769_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9142366c154821c036b93a0f57d3462f17ec16d9f87a934e13ffe8c3eac73aa = $this->env->getExtension("native_profiler");
        $__internal_a9142366c154821c036b93a0f57d3462f17ec16d9f87a934e13ffe8c3eac73aa->enter($__internal_a9142366c154821c036b93a0f57d3462f17ec16d9f87a934e13ffe8c3eac73aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_a9142366c154821c036b93a0f57d3462f17ec16d9f87a934e13ffe8c3eac73aa->leave($__internal_a9142366c154821c036b93a0f57d3462f17ec16d9f87a934e13ffe8c3eac73aa_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_9d2bef086aa6178d284abf319ea8771a7f3908eecdc8051f736fc3632463be5c = $this->env->getExtension("native_profiler");
        $__internal_9d2bef086aa6178d284abf319ea8771a7f3908eecdc8051f736fc3632463be5c->enter($__internal_9d2bef086aa6178d284abf319ea8771a7f3908eecdc8051f736fc3632463be5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 6
        echo "
";
        // line 7
        if (( !(null === (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))) ||  !twig_test_empty((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))))) {
            // line 8
            echo "
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"panel panel-default\" style=\" margin-top: 10px;\">
\t\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_afficheOnePost", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "\"><div class=\"panel-title\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "titre", array()), "html", null, true);
            echo " </div></a>
\t\t\t\t<div class=\"panel-body\"> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "contenu", array()), "html", null, true);
            echo " </div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        }
        // line 19
        echo "
";
        
        $__internal_9d2bef086aa6178d284abf319ea8771a7f3908eecdc8051f736fc3632463be5c->leave($__internal_9d2bef086aa6178d284abf319ea8771a7f3908eecdc8051f736fc3632463be5c_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  70 => 13,  64 => 12,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %} Accueil {% endblock %}*/
/* */
/* {% block corps %}*/
/* */
/* {% if post is not null or post is not empty %}*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-12">*/
/* 			<div class="panel panel-default" style=" margin-top: 10px;">*/
/* 				<a href="{{path('blog_afficheOnePost', {'id' : post.id})}}"><div class="panel-title"> {{ post.titre }} </div></a>*/
/* 				<div class="panel-body"> {{ post.contenu }} </div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endif %}*/
/* */
/* {% endblock %}*/
