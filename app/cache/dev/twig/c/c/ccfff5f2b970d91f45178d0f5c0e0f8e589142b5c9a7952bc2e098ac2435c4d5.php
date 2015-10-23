<?php

/* BlogBundle:Blog:index.html.twig */
class __TwigTemplate_93a01753a7c9090828f556dd7c13928e85cdde47356bbb3995227937bc82ac22 extends Twig_Template
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
        $__internal_4a8e004ef19e66df9d18ee45b71d98c30a36d59a7733f171931b5ccc5abdc5c1 = $this->env->getExtension("native_profiler");
        $__internal_4a8e004ef19e66df9d18ee45b71d98c30a36d59a7733f171931b5ccc5abdc5c1->enter($__internal_4a8e004ef19e66df9d18ee45b71d98c30a36d59a7733f171931b5ccc5abdc5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a8e004ef19e66df9d18ee45b71d98c30a36d59a7733f171931b5ccc5abdc5c1->leave($__internal_4a8e004ef19e66df9d18ee45b71d98c30a36d59a7733f171931b5ccc5abdc5c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c5e111a65d823c9d9c8827a1dd99e6ab4425a3470300fa6f2c1c9bc04bbede7 = $this->env->getExtension("native_profiler");
        $__internal_9c5e111a65d823c9d9c8827a1dd99e6ab4425a3470300fa6f2c1c9bc04bbede7->enter($__internal_9c5e111a65d823c9d9c8827a1dd99e6ab4425a3470300fa6f2c1c9bc04bbede7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_9c5e111a65d823c9d9c8827a1dd99e6ab4425a3470300fa6f2c1c9bc04bbede7->leave($__internal_9c5e111a65d823c9d9c8827a1dd99e6ab4425a3470300fa6f2c1c9bc04bbede7_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_46aad1008eac89aba1afeec08c7d9ea9089e647b4214a5ca91b80d0a660b688e = $this->env->getExtension("native_profiler");
        $__internal_46aad1008eac89aba1afeec08c7d9ea9089e647b4214a5ca91b80d0a660b688e->enter($__internal_46aad1008eac89aba1afeec08c7d9ea9089e647b4214a5ca91b80d0a660b688e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

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
        
        $__internal_46aad1008eac89aba1afeec08c7d9ea9089e647b4214a5ca91b80d0a660b688e->leave($__internal_46aad1008eac89aba1afeec08c7d9ea9089e647b4214a5ca91b80d0a660b688e_prof);

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
