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
        $__internal_457baa72f8eff9b26c7973b9fe16a815ce484c17fd8709f4b585f93fb215fed4 = $this->env->getExtension("native_profiler");
        $__internal_457baa72f8eff9b26c7973b9fe16a815ce484c17fd8709f4b585f93fb215fed4->enter($__internal_457baa72f8eff9b26c7973b9fe16a815ce484c17fd8709f4b585f93fb215fed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_457baa72f8eff9b26c7973b9fe16a815ce484c17fd8709f4b585f93fb215fed4->leave($__internal_457baa72f8eff9b26c7973b9fe16a815ce484c17fd8709f4b585f93fb215fed4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ee1d1d0f92477a7c746d2fa85159654298ca6d113ad0cc746054ccbf646b61a = $this->env->getExtension("native_profiler");
        $__internal_0ee1d1d0f92477a7c746d2fa85159654298ca6d113ad0cc746054ccbf646b61a->enter($__internal_0ee1d1d0f92477a7c746d2fa85159654298ca6d113ad0cc746054ccbf646b61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_0ee1d1d0f92477a7c746d2fa85159654298ca6d113ad0cc746054ccbf646b61a->leave($__internal_0ee1d1d0f92477a7c746d2fa85159654298ca6d113ad0cc746054ccbf646b61a_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_6981323e108ef365c99143317a10f952f8fa6ce675e516079afce7d46c28468c = $this->env->getExtension("native_profiler");
        $__internal_6981323e108ef365c99143317a10f952f8fa6ce675e516079afce7d46c28468c->enter($__internal_6981323e108ef365c99143317a10f952f8fa6ce675e516079afce7d46c28468c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

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

";
        // line 34
        if ((twig_length_filter($this->env, (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))) > 0)) {
            // line 35
            echo "    <ul> <!-- Pour le moment, trouver du bootstrap après -->
        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 37
                echo "            <li> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "username", array()), "html", null, true);
                echo " dit : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "commentaire", array()), "html", null, true);
                echo " <br/> (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "email", array()), "html", null, true);
                echo ") </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    </ul>
";
        }
        // line 41
        echo "
<div class=\"well\">
 
    <h4>Leave a comment</h4>
 
    ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

        <div class=\"col-md-12 form-group\">
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Write some comments"));
        echo "
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
        </div>

        <div class=\"col-md-12 form-group text-right\">
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "add", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Comment !"));
        echo "
        </div>
 
    ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
";
        
        $__internal_6981323e108ef365c99143317a10f952f8fa6ce675e516079afce7d46c28468c->leave($__internal_6981323e108ef365c99143317a10f952f8fa6ce675e516079afce7d46c28468c_prof);

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
        return array (  164 => 57,  158 => 54,  151 => 50,  147 => 49,  141 => 46,  134 => 41,  130 => 39,  117 => 37,  113 => 36,  110 => 35,  108 => 34,  104 => 32,  97 => 27,  90 => 26,  88 => 25,  81 => 21,  77 => 20,  64 => 12,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
/* */
/* {% if comments|length > 0 %}*/
/*     <ul> <!-- Pour le moment, trouver du bootstrap après -->*/
/*         {% for comment in comments %}*/
/*             <li> {{ comment.user.username }} dit : {{ comment.commentaire }} <br/> ({{ comment.user.email }}) </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endif %}*/
/* */
/* <div class="well">*/
/*  */
/*     <h4>Leave a comment</h4>*/
/*  */
/*     {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*         <div class="col-md-12 form-group">*/
/*             {{ form_label(form.commentaire, "Write some comments", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*             {{ form_errors(form.commentaire) }}*/
/*         </div>*/
/* */
/*         <div class="col-md-12 form-group text-right">*/
/*             {{ form_label(form.add, "Comment !", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*         </div>*/
/*  */
/*     {{ form_end(form) }}*/
/* */
/* </div>*/
/* {% endblock %}*/
