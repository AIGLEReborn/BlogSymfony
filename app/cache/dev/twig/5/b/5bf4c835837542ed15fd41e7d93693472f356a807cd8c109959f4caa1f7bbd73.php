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
        $__internal_58f458567620942de319be12045943af6c62bbe2ccb9522669acfb5732caa96f = $this->env->getExtension("native_profiler");
        $__internal_58f458567620942de319be12045943af6c62bbe2ccb9522669acfb5732caa96f->enter($__internal_58f458567620942de319be12045943af6c62bbe2ccb9522669acfb5732caa96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58f458567620942de319be12045943af6c62bbe2ccb9522669acfb5732caa96f->leave($__internal_58f458567620942de319be12045943af6c62bbe2ccb9522669acfb5732caa96f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67854cdcc3522849d5de25eecb78e141f2880aaf575bae4dcb4a298978ed24d3 = $this->env->getExtension("native_profiler");
        $__internal_67854cdcc3522849d5de25eecb78e141f2880aaf575bae4dcb4a298978ed24d3->enter($__internal_67854cdcc3522849d5de25eecb78e141f2880aaf575bae4dcb4a298978ed24d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_67854cdcc3522849d5de25eecb78e141f2880aaf575bae4dcb4a298978ed24d3->leave($__internal_67854cdcc3522849d5de25eecb78e141f2880aaf575bae4dcb4a298978ed24d3_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_83eef2cf26c16ab313d3d1844b11bbf394a19bc5a25c88e984e743d608e26a75 = $this->env->getExtension("native_profiler");
        $__internal_83eef2cf26c16ab313d3d1844b11bbf394a19bc5a25c88e984e743d608e26a75->enter($__internal_83eef2cf26c16ab313d3d1844b11bbf394a19bc5a25c88e984e743d608e26a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

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
                    par Groland 
                </p>
                <p><span class=\"glyphicon glyphicon-time\"></span> Ecrit le ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "datePublication", array()), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "datePublication", array()), "H:i:s"), "html", null, true);
            echo "</p>
                ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
            echo " commentaires
                <hr>

                <p> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "contenu", array()), "html", null, true);
            echo " </p>
                <a class=\"btn btn-primary\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_afficheOnePost", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "\">Lire et commenter <span class=\"glyphicon glyphicon-chevron-right\"></span></a>

                <hr>

                 ";
            // line 26
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 27
                echo "\t\t\t\t<div class=\"btn\"><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_EditPost", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
                echo "> Modifier cet article </a></div> - <div class=\"btn\"><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_DeletePost", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
                echo "> Supprimer cet article </a></div>";
            }
            // line 28
            echo "\t\t</div>

\t</div>

";
        }
        // line 33
        echo "</div>

";
        // line 35
        if ((twig_length_filter($this->env, (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))) > 0)) {
            // line 36
            echo "    <ul> <!-- Pour le moment, trouver du bootstrap après -->
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 38
                echo "            <li> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "username", array()), "html", null, true);
                echo " dit : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "commentaire", array()), "html", null, true);
                echo " <br/> (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "email", array()), "html", null, true);
                echo ") 

             ";
                // line 40
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 41
                    echo "                <a href=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_EditComment", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                    echo "><img src=\"https://cdn4.iconfinder.com/data/icons/32x32-free-design-icons/32/Pencil.png\" height=\"10\" width=\"10\"/></a>&nbsp;-&nbsp;<a href=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_DeleteComment", array("idP" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                    echo "><img src=\"http://www.andorrasportstraining.com/resources/images/Dialog-close.png\" height=\"10\" width=\"10\"/></a>
            ";
                }
                // line 43
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    </ul>
";
        }
        // line 47
        echo "
<div class=\"well\">
 
    <h4>Leave a comment</h4>
 
    ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

        <div class=\"col-md-12 form-group\">
            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Write some comments"));
        echo "
            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
        </div>

        <div class=\"col-md-12 form-group text-right\">
            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "add", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Comment !"));
        echo "
        </div>
 
    ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
";
        
        $__internal_83eef2cf26c16ab313d3d1844b11bbf394a19bc5a25c88e984e743d608e26a75->leave($__internal_83eef2cf26c16ab313d3d1844b11bbf394a19bc5a25c88e984e743d608e26a75_prof);

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
        return array (  187 => 63,  181 => 60,  174 => 56,  170 => 55,  164 => 52,  157 => 47,  153 => 45,  146 => 43,  138 => 41,  136 => 40,  126 => 38,  122 => 37,  119 => 36,  117 => 35,  113 => 33,  106 => 28,  99 => 27,  97 => 26,  90 => 22,  86 => 21,  80 => 18,  74 => 17,  64 => 12,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
/*                     par Groland */
/*                 </p>*/
/*                 <p><span class="glyphicon glyphicon-time"></span> Ecrit le {{post.datePublication|date("d/m/Y")}} à {{post.datePublication|date("H:i:s")}}</p>*/
/*                 {{ count }} commentaires*/
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
/*             <li> {{ comment.user.username }} dit : {{ comment.commentaire }} <br/> ({{ comment.user.email }}) */
/* */
/*              {% if is_granted("ROLE_ADMIN") %}*/
/*                 <a href={{path('blog_EditComment', {'id' : comment.id})}}><img src="https://cdn4.iconfinder.com/data/icons/32x32-free-design-icons/32/Pencil.png" height="10" width="10"/></a>&nbsp;-&nbsp;<a href={{path('blog_DeleteComment', {'idP' : post.id,'id' : comment.id})}}><img src="http://www.andorrasportstraining.com/resources/images/Dialog-close.png" height="10" width="10"/></a>*/
/*             {% endif %}*/
/*             </li>*/
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
