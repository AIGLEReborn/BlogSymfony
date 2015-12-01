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
        $__internal_433219d4f53fe44f75ad0cfd7f4ae9bfb136419ce7f8a60ae01e5f4be7bf22ac = $this->env->getExtension("native_profiler");
        $__internal_433219d4f53fe44f75ad0cfd7f4ae9bfb136419ce7f8a60ae01e5f4be7bf22ac->enter($__internal_433219d4f53fe44f75ad0cfd7f4ae9bfb136419ce7f8a60ae01e5f4be7bf22ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_433219d4f53fe44f75ad0cfd7f4ae9bfb136419ce7f8a60ae01e5f4be7bf22ac->leave($__internal_433219d4f53fe44f75ad0cfd7f4ae9bfb136419ce7f8a60ae01e5f4be7bf22ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ae90897fac402ceedfc9c1f67bc98e74b63fb85085b264bda73e2d8c962d38c = $this->env->getExtension("native_profiler");
        $__internal_7ae90897fac402ceedfc9c1f67bc98e74b63fb85085b264bda73e2d8c962d38c->enter($__internal_7ae90897fac402ceedfc9c1f67bc98e74b63fb85085b264bda73e2d8c962d38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_7ae90897fac402ceedfc9c1f67bc98e74b63fb85085b264bda73e2d8c962d38c->leave($__internal_7ae90897fac402ceedfc9c1f67bc98e74b63fb85085b264bda73e2d8c962d38c_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_6b14b18097f09335ab999c3a53276ae4374b585005447137b4d8d102a6608ceb = $this->env->getExtension("native_profiler");
        $__internal_6b14b18097f09335ab999c3a53276ae4374b585005447137b4d8d102a6608ceb->enter($__internal_6b14b18097f09335ab999c3a53276ae4374b585005447137b4d8d102a6608ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

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
                    par <a href=\"index.php\"> TODO   Start Bootstrap</a>
                </p>
                <p><span class=\"glyphicon glyphicon-time\"></span>  TODOOOOOOO Posted on August 28, 2013 at 10:00 PM</p>
                <hr>

                <p> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "contenu", array()), "html", null, true);
            echo " </p>
                <a class=\"btn btn-primary\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_afficheOnePost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">Lire et commenter <span class=\"glyphicon glyphicon-chevron-right\"></span></a>

                <hr>

                 ";
            // line 25
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 26
                echo "\t\t\t\t<div class=\"btn\"><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_EditPost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "> Modifier cet article </a></div> - <div class=\"btn\"><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_DeletePost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "> Supprimer cet article </a></div>";
            }
            // line 27
            echo "\t\t</div>
\t</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</div>

\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 34
            echo "
\t\t<a href=";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_pageX", array("value" => $context["i"])), "html", null, true);
            echo " > ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo " </a> 

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "

";
        
        $__internal_6b14b18097f09335ab999c3a53276ae4374b585005447137b4d8d102a6608ceb->leave($__internal_6b14b18097f09335ab999c3a53276ae4374b585005447137b4d8d102a6608ceb_prof);

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
        return array (  130 => 38,  119 => 35,  116 => 34,  112 => 33,  108 => 31,  99 => 27,  92 => 26,  90 => 25,  83 => 21,  79 => 20,  66 => 12,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
/*                     par <a href="index.php"> TODO   Start Bootstrap</a>*/
/*                 </p>*/
/*                 <p><span class="glyphicon glyphicon-time"></span>  TODOOOOOOO Posted on August 28, 2013 at 10:00 PM</p>*/
/*                 <hr>*/
/* */
/*                 <p> {{ post.contenu }} </p>*/
/*                 <a class="btn btn-primary" href="{{path('blog_afficheOnePost', {'id' : post.id})}}">Lire et commenter <span class="glyphicon glyphicon-chevron-right"></span></a>*/
/* */
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
