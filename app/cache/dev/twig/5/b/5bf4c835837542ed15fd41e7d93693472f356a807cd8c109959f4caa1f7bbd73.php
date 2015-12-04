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
        $__internal_6c687eca9ae549a0fc501c84f3ba03a9d3dfd2699f3db24403c2f444eecf9728 = $this->env->getExtension("native_profiler");
        $__internal_6c687eca9ae549a0fc501c84f3ba03a9d3dfd2699f3db24403c2f444eecf9728->enter($__internal_6c687eca9ae549a0fc501c84f3ba03a9d3dfd2699f3db24403c2f444eecf9728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c687eca9ae549a0fc501c84f3ba03a9d3dfd2699f3db24403c2f444eecf9728->leave($__internal_6c687eca9ae549a0fc501c84f3ba03a9d3dfd2699f3db24403c2f444eecf9728_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6490b4ebc5c438a4425a72fb1f42439bc6a19edaba8784fbee8a62846b1248cf = $this->env->getExtension("native_profiler");
        $__internal_6490b4ebc5c438a4425a72fb1f42439bc6a19edaba8784fbee8a62846b1248cf->enter($__internal_6490b4ebc5c438a4425a72fb1f42439bc6a19edaba8784fbee8a62846b1248cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Article ";
        
        $__internal_6490b4ebc5c438a4425a72fb1f42439bc6a19edaba8784fbee8a62846b1248cf->leave($__internal_6490b4ebc5c438a4425a72fb1f42439bc6a19edaba8784fbee8a62846b1248cf_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_d4349ae994fb197a8fbf514e0a1f21b899ce19c4c744993088772700941e917c = $this->env->getExtension("native_profiler");
        $__internal_d4349ae994fb197a8fbf514e0a1f21b899ce19c4c744993088772700941e917c->enter($__internal_d4349ae994fb197a8fbf514e0a1f21b899ce19c4c744993088772700941e917c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

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
                echo "</strong><span class=\"text-muted\">, <i><small>publié le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "datePublication", array()), "d/m/Y"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "datePublication", array()), "H:i:s"), "html", null, true);
                echo "</small></i></span> 
                            ";
                // line 45
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 46
                    echo "                                <div class = 'pull-right'>
                                    <a href=";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_EditComment", array("idP" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                    echo "><img src=\"https://cdn4.iconfinder.com/data/icons/32x32-free-design-icons/32/Pencil.png\" height=\"10\" width=\"10\"/></a>&nbsp;-&nbsp;<a href=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_DeleteComment", array("idP" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                    echo "><img src=\"http://www.andorrasportstraining.com/resources/images/Dialog-close.png\" height=\"10\" width=\"10\"/></a>
                                </div>
                            ";
                }
                // line 50
                echo "                            <br>
                            <small>(";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "email", array()), "html", null, true);
                echo ")</small>
                        </div>
                        <div class=\"panel-body\">
                            ";
                // line 54
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
            // line 61
            echo "    <p> Il n'y a pas de commentaires à afficher. </p>
";
        }
        // line 63
        echo "     <div class=\"container-fluid\">
         <div class=\"row\">

        <div class=\"col-md-8\">

            <h4>Laisser un commentaire</h4>
            
            ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

                <div class=\"form-group\">
                   ";
        // line 74
        echo "                   ";
        // line 75
        echo "                   ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"form-group\">
                   ";
        // line 80
        echo "                   ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "envoyer", array()), 'widget', array("attr" => array("class" => "btn pull-right")));
        echo "
                </div>
         
            ";
        // line 83
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
</div>
</div>
";
        
        $__internal_d4349ae994fb197a8fbf514e0a1f21b899ce19c4c744993088772700941e917c->leave($__internal_d4349ae994fb197a8fbf514e0a1f21b899ce19c4c744993088772700941e917c_prof);

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
        return array (  206 => 83,  199 => 80,  191 => 75,  189 => 74,  183 => 70,  174 => 63,  170 => 61,  157 => 54,  151 => 51,  148 => 50,  140 => 47,  137 => 46,  135 => 45,  127 => 44,  121 => 40,  117 => 39,  110 => 34,  108 => 33,  104 => 31,  97 => 26,  90 => 25,  88 => 24,  80 => 19,  76 => 17,  70 => 15,  64 => 12,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
/*                             <strong>{{ comment.user.username }}</strong><span class="text-muted">, <i><small>publié le {{comment.datePublication|date("d/m/Y")}} à {{comment.datePublication|date("H:i:s")}}</small></i></span> */
/*                             {% if is_granted("ROLE_ADMIN") %}*/
/*                                 <div class = 'pull-right'>*/
/*                                     <a href={{path('blog_EditComment', {'idP' : post.id,'id' : comment.id})}}><img src="https://cdn4.iconfinder.com/data/icons/32x32-free-design-icons/32/Pencil.png" height="10" width="10"/></a>&nbsp;-&nbsp;<a href={{path('blog_DeleteComment', {'idP' : post.id,'id' : comment.id})}}><img src="http://www.andorrasportstraining.com/resources/images/Dialog-close.png" height="10" width="10"/></a>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             <br>*/
/*                             <small>({{ comment.user.email }})</small>*/
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
/*      <div class="container-fluid">*/
/*          <div class="row">*/
/* */
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
/* */
/*     </div>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
