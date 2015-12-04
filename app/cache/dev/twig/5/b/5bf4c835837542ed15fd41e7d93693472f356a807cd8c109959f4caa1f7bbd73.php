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
        $__internal_b52f3e4fd61f1156bbf9a70cf189db63178e18b3cc3e5bbd03dc8c96d0b55655 = $this->env->getExtension("native_profiler");
        $__internal_b52f3e4fd61f1156bbf9a70cf189db63178e18b3cc3e5bbd03dc8c96d0b55655->enter($__internal_b52f3e4fd61f1156bbf9a70cf189db63178e18b3cc3e5bbd03dc8c96d0b55655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b52f3e4fd61f1156bbf9a70cf189db63178e18b3cc3e5bbd03dc8c96d0b55655->leave($__internal_b52f3e4fd61f1156bbf9a70cf189db63178e18b3cc3e5bbd03dc8c96d0b55655_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_85c9c59fbc0689a6d0e9a389efbcc26da82b6601b925d35de221c40ca97b4fd3 = $this->env->getExtension("native_profiler");
        $__internal_85c9c59fbc0689a6d0e9a389efbcc26da82b6601b925d35de221c40ca97b4fd3->enter($__internal_85c9c59fbc0689a6d0e9a389efbcc26da82b6601b925d35de221c40ca97b4fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Article ";
        
        $__internal_85c9c59fbc0689a6d0e9a389efbcc26da82b6601b925d35de221c40ca97b4fd3->leave($__internal_85c9c59fbc0689a6d0e9a389efbcc26da82b6601b925d35de221c40ca97b4fd3_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_8871c610317492d406c37a7ee728f5b1381003d2906a00280c32e1397f369335 = $this->env->getExtension("native_profiler");
        $__internal_8871c610317492d406c37a7ee728f5b1381003d2906a00280c32e1397f369335->enter($__internal_8871c610317492d406c37a7ee728f5b1381003d2906a00280c32e1397f369335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

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
                    ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "titre", array()), "html", null, true);
            echo "<small>, écrit par Groland </small>
                </h2>

                <p><span class=\"glyphicon glyphicon-time\"></span> Ecrit le ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "datePublication", array()), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "datePublication", array()), "H:i:s"), "html", null, true);
            echo "</p>
                ";
            // line 17
            echo "                <hr>

                <p> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "contenu", array()), "html", null, true);
            echo " </p>
               

                <hr>

                 ";
            // line 24
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 25
                echo "\t\t\t\t<div class=\"btn\"><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_EditPost", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
                echo "> Modifier cet article </a></div> - <div class=\"btn\"><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_DeletePost", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
                echo "> Supprimer cet article </a></div>";
            }
            // line 26
            echo "\t\t</div>

\t</div>

";
        }
        // line 31
        echo "
            <h4><small>Commentaire(s) :</small></h4>
";
        // line 33
        if ((twig_length_filter($this->env, (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))) > 0)) {
            // line 34
            echo "    <div class=\"row\">
        <div class=\"col-sm-12\">

        </div><!-- /col-sm-12 -->
    </div><!-- /row -->
        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 40
                echo "            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <strong>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "username", array()), "html", null, true);
                echo "</strong> <span class=\"text-muted\"> Publié le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "datePublication", array()), "d/m/Y"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "datePublication", array()), "H:i:s"), "html", null, true);
                echo "</span> 
                            ";
                // line 45
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 46
                    echo "                                <div class = 'pull-right'>
                                    <a href=";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_EditComment", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                    echo "><img src=\"https://cdn4.iconfinder.com/data/icons/32x32-free-design-icons/32/Pencil.png\" height=\"10\" width=\"10\"/></a>&nbsp;-&nbsp;<a href=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_DeleteComment", array("idP" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                    echo "><img src=\"http://www.andorrasportstraining.com/resources/images/Dialog-close.png\" height=\"10\" width=\"10\"/></a>
                                </div>
                            ";
                }
                // line 50
                echo "                            <br> (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "email", array()), "html", null, true);
                echo ")
                        </div>
                        <div class=\"panel-body\">
                            ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "commentaire", array()), "html", null, true);
                echo "
                        </div><!-- /panel-body -->
                    </div><!-- /panel panel-default -->
                </div><!-- /col-sm-5 -->
            </div><!-- /row -->
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 60
            echo "    <p> Il n'y a pas de commentaires à afficher. </p>
";
        }
        // line 62
        echo "
<!-- <div class=\"well\"> 
     <div class=\"container-fluid\">
         <div class=\"row\">
            <!--<div class=\"col-md-2\">
            </div>-->
        <div class=\"col-md-8\">

            <h4>Laisser un commentaire</h4>
            
            ";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

                <div class=\"form-group\">
                   ";
        // line 76
        echo "                   ";
        // line 77
        echo "                   ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"form-group\">
                   ";
        // line 82
        echo "                   ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "envoyer", array()), 'widget', array("attr" => array("class" => "btn pull-right")));
        echo "
                </div>
         
            ";
        // line 85
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <!--<div class=\"col-md-2\">
            </div>-->
    </div>
</div> -->





</div>
</div>
";
        
        $__internal_8871c610317492d406c37a7ee728f5b1381003d2906a00280c32e1397f369335->leave($__internal_8871c610317492d406c37a7ee728f5b1381003d2906a00280c32e1397f369335_prof);

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
        return array (  207 => 85,  200 => 82,  192 => 77,  190 => 76,  184 => 72,  172 => 62,  168 => 60,  155 => 53,  148 => 50,  140 => 47,  137 => 46,  135 => 45,  127 => 44,  121 => 40,  117 => 39,  110 => 34,  108 => 33,  104 => 31,  97 => 26,  90 => 25,  88 => 24,  80 => 19,  76 => 17,  70 => 15,  64 => 12,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %} Article {% endblock %}*/
/* */
/* {% block corps %}*/
/* <div class="container">*/
/* {% if post is not null or post is not empty %}*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-8">*/
/*                 <h2>*/
/*                     {{ post.titre }}<small>, écrit par Groland </small>*/
/*                 </h2>*/
/* */
/*                 <p><span class="glyphicon glyphicon-time"></span> Ecrit le {{post.datePublication|date("d/m/Y")}} à {{post.datePublication|date("H:i:s")}}</p>*/
/*                 {# {{ count }} commentaires #}*/
/*                 <hr>*/
/* */
/*                 <p> {{ post.contenu }} </p>*/
/*                */
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
/* */
/*             <h4><small>Commentaire(s) :</small></h4>*/
/* {% if comments|length > 0 %}*/
/*     <div class="row">*/
/*         <div class="col-sm-12">*/
/* */
/*         </div><!-- /col-sm-12 -->*/
/*     </div><!-- /row -->*/
/*         {% for comment in comments %}*/
/*             <div class="row">*/
/*                 <div class="col-sm-5">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                             <strong>{{ comment.user.username }}</strong> <span class="text-muted"> Publié le {{comment.datePublication|date("d/m/Y")}} à {{comment.datePublication|date("H:i:s")}}</span> */
/*                             {% if is_granted("ROLE_ADMIN") %}*/
/*                                 <div class = 'pull-right'>*/
/*                                     <a href={{path('blog_EditComment', {'id' : comment.id})}}><img src="https://cdn4.iconfinder.com/data/icons/32x32-free-design-icons/32/Pencil.png" height="10" width="10"/></a>&nbsp;-&nbsp;<a href={{path('blog_DeleteComment', {'idP' : post.id,'id' : comment.id})}}><img src="http://www.andorrasportstraining.com/resources/images/Dialog-close.png" height="10" width="10"/></a>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             <br> ({{ comment.user.email }})*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             {{ comment.commentaire }}*/
/*                         </div><!-- /panel-body -->*/
/*                     </div><!-- /panel panel-default -->*/
/*                 </div><!-- /col-sm-5 -->*/
/*             </div><!-- /row -->*/
/*         {% endfor %}*/
/* {% else %}*/
/*     <p> Il n'y a pas de commentaires à afficher. </p>*/
/* {% endif %}*/
/* */
/* <!-- <div class="well"> */
/*      <div class="container-fluid">*/
/*          <div class="row">*/
/*             <!--<div class="col-md-2">*/
/*             </div>-->*/
/*         <div class="col-md-8">*/
/* */
/*             <h4>Laisser un commentaire</h4>*/
/*             */
/*             {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*                 <div class="form-group">*/
/*                    {# {{ form_errors(form.commentaire) }} #}*/
/*                    {# {{ form_label(form.commentaire, 'commentaire' , {'label_attr': {'class': 'col-sm-3 control-label '}}) }} #}*/
/*                    {{ form_widget(form.commentaire, {'attr': {'class':'form-control'}}) }}*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                    {# {{ form_label(form.envoyer, "Envoyer", {'label_attr': {'class': 'btn pull-right'}}) }} #}*/
/*                    {{ form_widget(form.envoyer, {'attr': {'class':'btn pull-right'}}) }}*/
/*                 </div>*/
/*          */
/*             {{ form_end(form) }}*/
/*             <!--<div class="col-md-2">*/
/*             </div>-->*/
/*     </div>*/
/* </div> -->*/
/* */
/* */
/* */
/* */
/* */
/* </div>*/
/* </div>*/
/* {% endblock %}*/
