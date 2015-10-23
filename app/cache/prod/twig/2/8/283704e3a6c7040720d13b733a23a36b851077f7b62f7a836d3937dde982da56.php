<?php

/* BlogBundle:Blog:index.html.twig */
class __TwigTemplate_5efc5e5d0a6b3c1168d705d3a731e26c90b51fa14a41fa20f34b427b6a45d83f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "BlogBundle:Blog:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Accueil ";
    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "
\t<div class=\"row\">
\t\t<div class=\"col-md-12 panel panel-heading\">
\t\t\t<div class=\"panel panel-default\" >
\t\t\t\t<div class=\"panel-titre\"> <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_afficheOnePost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
            echo " </a></div>
\t\t\t\t<div class=\"panel-body\"> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "contenu", array()), "html", null, true);
            echo " </div>
\t\t\t\t<div class=\"btn\"><a href=";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_EditPost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "> Modifier cet article </a></div> - <div class=\"btn\"><a href=";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_DeletePost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "> Supprimer cet article </a></div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  61 => 14,  57 => 13,  51 => 12,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %} Accueil {% endblock %}*/
/* */
/* {% block corps %}*/
/* */
/* {% for post in posts %}*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-12 panel panel-heading">*/
/* 			<div class="panel panel-default" >*/
/* 				<div class="panel-titre"> <a href="{{path('blog_afficheOnePost', {'id' : post.id})}}">{{ post.titre }} </a></div>*/
/* 				<div class="panel-body"> {{ post.contenu }} </div>*/
/* 				<div class="btn"><a href={{path('blog_EditPost', {'id' : post.id})}}> Modifier cet article </a></div> - <div class="btn"><a href={{path('blog_DeletePost', {'id' : post.id})}}> Supprimer cet article </a></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endfor %}*/
/* */
/* {% endblock %}*/
