<?php

/* BlogBundle:Blog:index.html.twig */
class __TwigTemplate_d1ee509a371a1a4ba7a7d8263b78b7108ad60bbe169dbf17406cdbdbe2f7f9ef extends Twig_Template
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
        $__internal_e705a82eef7a3ee26f65c51d301ac6d3646feb19ec617e7768f1ff94dd09cdc6 = $this->env->getExtension("native_profiler");
        $__internal_e705a82eef7a3ee26f65c51d301ac6d3646feb19ec617e7768f1ff94dd09cdc6->enter($__internal_e705a82eef7a3ee26f65c51d301ac6d3646feb19ec617e7768f1ff94dd09cdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e705a82eef7a3ee26f65c51d301ac6d3646feb19ec617e7768f1ff94dd09cdc6->leave($__internal_e705a82eef7a3ee26f65c51d301ac6d3646feb19ec617e7768f1ff94dd09cdc6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a995092fd6085a46fc37d3d57cd5c54146bee2f927a903d14e41c068f3d7a6a = $this->env->getExtension("native_profiler");
        $__internal_3a995092fd6085a46fc37d3d57cd5c54146bee2f927a903d14e41c068f3d7a6a->enter($__internal_3a995092fd6085a46fc37d3d57cd5c54146bee2f927a903d14e41c068f3d7a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_3a995092fd6085a46fc37d3d57cd5c54146bee2f927a903d14e41c068f3d7a6a->leave($__internal_3a995092fd6085a46fc37d3d57cd5c54146bee2f927a903d14e41c068f3d7a6a_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_9422f7822e21179cbed961ae499d831f448992295b7cd54e5a250406b85aa6ec = $this->env->getExtension("native_profiler");
        $__internal_9422f7822e21179cbed961ae499d831f448992295b7cd54e5a250406b85aa6ec->enter($__internal_9422f7822e21179cbed961ae499d831f448992295b7cd54e5a250406b85aa6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 6
        echo "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
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
        
        $__internal_9422f7822e21179cbed961ae499d831f448992295b7cd54e5a250406b85aa6ec->leave($__internal_9422f7822e21179cbed961ae499d831f448992295b7cd54e5a250406b85aa6ec_prof);

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
        return array (  90 => 20,  76 => 14,  72 => 13,  66 => 12,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
