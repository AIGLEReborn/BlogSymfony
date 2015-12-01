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
        $__internal_15c6facce0c848d5def841419fc570e5d561096e6dccd2a36da8590801df7883 = $this->env->getExtension("native_profiler");
        $__internal_15c6facce0c848d5def841419fc570e5d561096e6dccd2a36da8590801df7883->enter($__internal_15c6facce0c848d5def841419fc570e5d561096e6dccd2a36da8590801df7883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15c6facce0c848d5def841419fc570e5d561096e6dccd2a36da8590801df7883->leave($__internal_15c6facce0c848d5def841419fc570e5d561096e6dccd2a36da8590801df7883_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f39958ba035bfa7d2f5140f44947ee5ba113df7a9d4fe5739a848c5307d66e2d = $this->env->getExtension("native_profiler");
        $__internal_f39958ba035bfa7d2f5140f44947ee5ba113df7a9d4fe5739a848c5307d66e2d->enter($__internal_f39958ba035bfa7d2f5140f44947ee5ba113df7a9d4fe5739a848c5307d66e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_f39958ba035bfa7d2f5140f44947ee5ba113df7a9d4fe5739a848c5307d66e2d->leave($__internal_f39958ba035bfa7d2f5140f44947ee5ba113df7a9d4fe5739a848c5307d66e2d_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_bf212ca4db57f28aad7db6de40f89f4c3c08f91d35dbc285f7a5c370d91cb5b5 = $this->env->getExtension("native_profiler");
        $__internal_bf212ca4db57f28aad7db6de40f89f4c3c08f91d35dbc285f7a5c370d91cb5b5->enter($__internal_bf212ca4db57f28aad7db6de40f89f4c3c08f91d35dbc285f7a5c370d91cb5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

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
        
        $__internal_bf212ca4db57f28aad7db6de40f89f4c3c08f91d35dbc285f7a5c370d91cb5b5->leave($__internal_bf212ca4db57f28aad7db6de40f89f4c3c08f91d35dbc285f7a5c370d91cb5b5_prof);

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
/* */
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
