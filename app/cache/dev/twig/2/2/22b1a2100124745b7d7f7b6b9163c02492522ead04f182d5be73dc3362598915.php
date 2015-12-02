<?php

/* BlogBundle:Blog:index.html.twig */
class __TwigTemplate_f4630e709ac187b26172d74282a1dcd2c93fb648fd4224a5b25035e17c8adb5b extends Twig_Template
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
        $__internal_d668843413302f8980752699e0d28fc1ff034e77f2a604d3a4f5e247c6b58e36 = $this->env->getExtension("native_profiler");
        $__internal_d668843413302f8980752699e0d28fc1ff034e77f2a604d3a4f5e247c6b58e36->enter($__internal_d668843413302f8980752699e0d28fc1ff034e77f2a604d3a4f5e247c6b58e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d668843413302f8980752699e0d28fc1ff034e77f2a604d3a4f5e247c6b58e36->leave($__internal_d668843413302f8980752699e0d28fc1ff034e77f2a604d3a4f5e247c6b58e36_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f518991fe8267ca5568d55ae8148b05fb14d2ac4a4fc531dcfd0bc49c5637650 = $this->env->getExtension("native_profiler");
        $__internal_f518991fe8267ca5568d55ae8148b05fb14d2ac4a4fc531dcfd0bc49c5637650->enter($__internal_f518991fe8267ca5568d55ae8148b05fb14d2ac4a4fc531dcfd0bc49c5637650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_f518991fe8267ca5568d55ae8148b05fb14d2ac4a4fc531dcfd0bc49c5637650->leave($__internal_f518991fe8267ca5568d55ae8148b05fb14d2ac4a4fc531dcfd0bc49c5637650_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_de42fe89b8c52ecd840132cfead48640aace680ebad7a160895e358deff74050 = $this->env->getExtension("native_profiler");
        $__internal_de42fe89b8c52ecd840132cfead48640aace680ebad7a160895e358deff74050->enter($__internal_de42fe89b8c52ecd840132cfead48640aace680ebad7a160895e358deff74050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 6
        echo "<div class=\"container\">
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "
\t<div class=\"row\">
\t\t<div class=\"col-md-8\">
                <h2>
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_afficheOnePost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
            echo " </a>
                </h2>
                <p class=\"lead\">
                    par Groland 
                </p>
                <p><span class=\"glyphicon glyphicon-time\"></span> Ecrit le ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "datePublication", array()), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "datePublication", array()), "H:i:s"), "html", null, true);
            echo "</p>
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["countComms"]) ? $context["countComms"] : $this->getContext($context, "countComms")), $this->getAttribute($context["post"], "id", array()), array(), "array"), "html", null, true);
            echo " commentaires
                <hr>

                <p> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "contenu", array()), "html", null, true);
            echo " </p>
                <a class=\"btn btn-primary\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_afficheOnePost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">Lire et commenter <span class=\"glyphicon glyphicon-chevron-right\"></span></a>
                
                <hr>

                 ";
            // line 26
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 27
                echo "\t\t\t\t<div class=\"btn\"><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_EditPost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "> Modifier cet article </a></div> - <div class=\"btn\"><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_DeletePost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "> Supprimer cet article </a></div>";
            }
            // line 28
            echo "\t\t</div>
\t</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</div>

\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 35
            echo "
\t\t<a href=";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_pageX", array("value" => $context["i"])), "html", null, true);
            echo " > ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo " </a> 

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "

";
        
        $__internal_de42fe89b8c52ecd840132cfead48640aace680ebad7a160895e358deff74050->leave($__internal_de42fe89b8c52ecd840132cfead48640aace680ebad7a160895e358deff74050_prof);

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
        return array (  139 => 39,  128 => 36,  125 => 35,  121 => 34,  117 => 32,  108 => 28,  101 => 27,  99 => 26,  92 => 22,  88 => 21,  82 => 18,  76 => 17,  66 => 12,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %} Accueil {% endblock %}*/
/* */
/* {% block corps %}*/
/* <div class="container">*/
/* {% for post in posts %}*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-8">*/
/*                 <h2>*/
/*                     <a href="{{path('blog_afficheOnePost', {'id' : post.id})}}">{{ post.titre }} </a>*/
/*                 </h2>*/
/*                 <p class="lead">*/
/*                     par Groland */
/*                 </p>*/
/*                 <p><span class="glyphicon glyphicon-time"></span> Ecrit le {{post.datePublication|date("d/m/Y")}} à {{post.datePublication|date("H:i:s")}}</p>*/
/*                     {{ countComms[post.id] }} commentaires*/
/*                 <hr>*/
/* */
/*                 <p> {{ post.contenu }} </p>*/
/*                 <a class="btn btn-primary" href="{{path('blog_afficheOnePost', {'id' : post.id})}}">Lire et commenter <span class="glyphicon glyphicon-chevron-right"></span></a>*/
/*                 */
/*                 <hr>*/
/* */
/*                  {% if is_granted("ROLE_ADMIN") %}*/
/* 				<div class="btn"><a href={{path('blog_EditPost', {'id' : post.id})}}> Modifier cet article </a></div> - <div class="btn"><a href={{path('blog_DeletePost', {'id' : post.id})}}> Supprimer cet article </a></div>{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endfor %}*/
/* </div>*/
/* */
/* 	{% for i in 1..count %}*/
/* */
/* 		<a href={{path('blog_pageX', {'value' : i }) }} > {{ i }} </a> */
/* */
/* 	{% endfor %}*/
/* */
/* */
/* {% endblock %}*/
