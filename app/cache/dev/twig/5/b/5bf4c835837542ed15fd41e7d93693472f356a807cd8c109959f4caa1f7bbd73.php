<?php

/* BlogBundle:Blog:affiche.html.twig */
class __TwigTemplate_eca1c184da6f2170e8baf1bcb12e10748ddb252a8d4c1d08cd9de0cb384c5df5 extends Twig_Template
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
        $__internal_3fd27a0b69d481b85c19b61ad74b62080bafffb22d5302be2b2c240bcd1e7789 = $this->env->getExtension("native_profiler");
        $__internal_3fd27a0b69d481b85c19b61ad74b62080bafffb22d5302be2b2c240bcd1e7789->enter($__internal_3fd27a0b69d481b85c19b61ad74b62080bafffb22d5302be2b2c240bcd1e7789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fd27a0b69d481b85c19b61ad74b62080bafffb22d5302be2b2c240bcd1e7789->leave($__internal_3fd27a0b69d481b85c19b61ad74b62080bafffb22d5302be2b2c240bcd1e7789_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_227f0a1eaac276b21cd926532263a732d189fd2f222ffba282fbd944b81a244f = $this->env->getExtension("native_profiler");
        $__internal_227f0a1eaac276b21cd926532263a732d189fd2f222ffba282fbd944b81a244f->enter($__internal_227f0a1eaac276b21cd926532263a732d189fd2f222ffba282fbd944b81a244f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_227f0a1eaac276b21cd926532263a732d189fd2f222ffba282fbd944b81a244f->leave($__internal_227f0a1eaac276b21cd926532263a732d189fd2f222ffba282fbd944b81a244f_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_a17a96a6d363592c80ec9b8a612013592bd61c94fe6131edec8c91ae9d6be66d = $this->env->getExtension("native_profiler");
        $__internal_a17a96a6d363592c80ec9b8a612013592bd61c94fe6131edec8c91ae9d6be66d->enter($__internal_a17a96a6d363592c80ec9b8a612013592bd61c94fe6131edec8c91ae9d6be66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 6
        echo "<div class=\"container\">
";
        // line 7
        if (( !(null === (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))) ||  !twig_test_empty((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))))) {
            // line 8
            echo "
\t<div class=\"row\">
\t\t<div class=\"col-md-8\">
                <h2>
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_afficheOnePost", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "titre", array()), "html", null, true);
            echo " </a>
                </h2>
                <p class=\"lead\">
                    par <a href=\"index.php\"> TODO   Start Bootstrap</a>
                </p>
                <p><span class=\"glyphicon glyphicon-time\"></span>  TODOOOOOOO Posted on August 28, 2013 at 10:00 PM</p>
                <hr>

                <p> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "contenu", array()), "html", null, true);
            echo " </p>
                <a class=\"btn btn-primary\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_afficheOnePost", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "\">Lire et commenter <span class=\"glyphicon glyphicon-chevron-right\"></span></a>

                <hr>

                 ";
            // line 25
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 26
                echo "\t\t\t\t<div class=\"btn\"><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_EditPost", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
                echo "> Modifier cet article </a></div> - <div class=\"btn\"><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_DeletePost", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
                echo "> Supprimer cet article </a></div>";
            }
            // line 27
            echo "\t\t</div>

\t</div>

";
        }
        // line 32
        echo "</div>
<div class=\"well\">
 
    <h4>Leave a comment</h4>
 
    <form role=\"form\" class=\"clearfix\">
 
        <div class=\"col-md-6 form-group\">
            <label class=\"sr-only\" for=\"name\">Name</label>
            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Name\">
        </div>
 
        <div class=\"col-md-6 form-group\">
            <label class=\"sr-only\" for=\"email\">Email</label>
            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email\">
        </div>
 
        <div class=\"col-md-12 form-group\">
            <label class=\"sr-only\" for=\"email\">Comment</label>
            <textarea class=\"form-control\" id=\"comment\" placeholder=\"Comment\"></textarea>
        </div>
 
        <div class=\"col-md-12 form-group text-right\">
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </div>
 
    </form>
</div>
";
        
        $__internal_a17a96a6d363592c80ec9b8a612013592bd61c94fe6131edec8c91ae9d6be66d->leave($__internal_a17a96a6d363592c80ec9b8a612013592bd61c94fe6131edec8c91ae9d6be66d_prof);

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
        return array (  104 => 32,  97 => 27,  90 => 26,  88 => 25,  81 => 21,  77 => 20,  64 => 12,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %} Accueil {% endblock %}*/
/* */
/* {% block corps %}*/
/* <div class="container">*/
/* {% if post is not null or post is not empty %}*/
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
/* */
/* 	</div>*/
/* */
/* {% endif %}*/
/* </div>*/
/* <div class="well">*/
/*  */
/*     <h4>Leave a comment</h4>*/
/*  */
/*     <form role="form" class="clearfix">*/
/*  */
/*         <div class="col-md-6 form-group">*/
/*             <label class="sr-only" for="name">Name</label>*/
/*             <input type="text" class="form-control" id="name" placeholder="Name">*/
/*         </div>*/
/*  */
/*         <div class="col-md-6 form-group">*/
/*             <label class="sr-only" for="email">Email</label>*/
/*             <input type="email" class="form-control" id="email" placeholder="Email">*/
/*         </div>*/
/*  */
/*         <div class="col-md-12 form-group">*/
/*             <label class="sr-only" for="email">Comment</label>*/
/*             <textarea class="form-control" id="comment" placeholder="Comment"></textarea>*/
/*         </div>*/
/*  */
/*         <div class="col-md-12 form-group text-right">*/
/*             <button type="submit" class="btn btn-primary">Submit</button>*/
/*         </div>*/
/*  */
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
