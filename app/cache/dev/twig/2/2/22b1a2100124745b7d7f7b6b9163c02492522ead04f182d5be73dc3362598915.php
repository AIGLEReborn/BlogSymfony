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
        $__internal_dfcc1f720d6101a366f8b8c9e229ce761487584de5cf2d8a12473893d61cd86d = $this->env->getExtension("native_profiler");
        $__internal_dfcc1f720d6101a366f8b8c9e229ce761487584de5cf2d8a12473893d61cd86d->enter($__internal_dfcc1f720d6101a366f8b8c9e229ce761487584de5cf2d8a12473893d61cd86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfcc1f720d6101a366f8b8c9e229ce761487584de5cf2d8a12473893d61cd86d->leave($__internal_dfcc1f720d6101a366f8b8c9e229ce761487584de5cf2d8a12473893d61cd86d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f73a87472d41cadbc4fc448aa599a98e0213b8605a88c05ea7a57da817cf34c = $this->env->getExtension("native_profiler");
        $__internal_4f73a87472d41cadbc4fc448aa599a98e0213b8605a88c05ea7a57da817cf34c->enter($__internal_4f73a87472d41cadbc4fc448aa599a98e0213b8605a88c05ea7a57da817cf34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_4f73a87472d41cadbc4fc448aa599a98e0213b8605a88c05ea7a57da817cf34c->leave($__internal_4f73a87472d41cadbc4fc448aa599a98e0213b8605a88c05ea7a57da817cf34c_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_066e391f69958c185259ccecd998b06926a03ba17620e4458671bd2be9cfed48 = $this->env->getExtension("native_profiler");
        $__internal_066e391f69958c185259ccecd998b06926a03ba17620e4458671bd2be9cfed48->enter($__internal_066e391f69958c185259ccecd998b06926a03ba17620e4458671bd2be9cfed48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 6
        echo "    <div class=\"container\">

        <div class=\"row\">
        \t<div class=\"col-md-8\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "                        <h2>
                            ";
            // line 12
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
            echo " ";
            // line 13
            echo "                        </h2>
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
            echo " commentaires <br> <br>
                         <a class=\"btn btn-primary\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_afficheOnePost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">Lire et commenter <span class=\"glyphicon glyphicon-chevron-right\"></span></a> <br> 
                        ";
            // line 20
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 21
                echo "                        <div class=\"btn\"><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_EditPost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "> Modifier cet article </a></div> - <div class=\"btn\"><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_DeletePost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "> Supprimer cet article </a></div>
                        ";
            }
            // line 23
            echo "
                        <hr>

                        ";
            // line 30
            echo "

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        \t</div>
        </div>

        ";
        // line 36
        if ((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) {
            // line 37
            echo "            <ul class=\"pagination\">
            \t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 39
                echo "
            \t\t<li><a href=";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_pageX", array("value" => $context["i"])), "html", null, true);
                echo " > ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " </a> </li>

            \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </ul>
        ";
        }
        // line 45
        echo "    </div>
";
        
        $__internal_066e391f69958c185259ccecd998b06926a03ba17620e4458671bd2be9cfed48->leave($__internal_066e391f69958c185259ccecd998b06926a03ba17620e4458671bd2be9cfed48_prof);

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
        return array (  145 => 45,  141 => 43,  130 => 40,  127 => 39,  123 => 38,  120 => 37,  118 => 36,  113 => 33,  105 => 30,  100 => 23,  92 => 21,  90 => 20,  86 => 19,  82 => 18,  76 => 17,  70 => 13,  66 => 12,  63 => 11,  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %} Accueil {% endblock %}*/
/* */
/* {% block corps %}*/
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*         	<div class="col-md-8">*/
/*                 {% for post in posts %}*/
/*                         <h2>*/
/*                             {#<a href="{{path('blog_afficheOnePost', {'id' : post.id})}}">#} {{ post.titre }} {#</a>#}*/
/*                         </h2>*/
/*                         <p class="lead">*/
/*                             par Groland */
/*                         </p>*/
/*                         <p><span class="glyphicon glyphicon-time"></span> Ecrit le {{post.datePublication|date("d/m/Y")}} à {{post.datePublication|date("H:i:s")}}</p>*/
/*                             {{ countComms[post.id] }} commentaires <br> <br>*/
/*                          <a class="btn btn-primary" href="{{path('blog_afficheOnePost', {'id' : post.id})}}">Lire et commenter <span class="glyphicon glyphicon-chevron-right"></span></a> <br> */
/*                         {% if is_granted("ROLE_ADMIN") %}*/
/*                         <div class="btn"><a href={{path('blog_EditPost', {'id' : post.id})}}> Modifier cet article </a></div> - <div class="btn"><a href={{path('blog_DeletePost', {'id' : post.id})}}> Supprimer cet article </a></div>*/
/*                         {% endif %}*/
/* */
/*                         <hr>*/
/* */
/*                         {# <p> {{ post.contenu }} </p>*/
/*                        */
/*                         */
/*                         <hr> #}*/
/* */
/* */
/*                 {% endfor %}*/
/*         	</div>*/
/*         </div>*/
/* */
/*         {% if pagination %}*/
/*             <ul class="pagination">*/
/*             	{% for i in 1..count %}*/
/* */
/*             		<li><a href={{path('blog_pageX', {'value' : i }) }} > {{ i }} </a> </li>*/
/* */
/*             	{% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
