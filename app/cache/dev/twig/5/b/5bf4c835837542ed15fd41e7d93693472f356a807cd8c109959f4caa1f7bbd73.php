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
        $__internal_b11572a11b405df9bd7ed277d195bbdae25bc9a04eef6ba00c4bd1f527fb6473 = $this->env->getExtension("native_profiler");
        $__internal_b11572a11b405df9bd7ed277d195bbdae25bc9a04eef6ba00c4bd1f527fb6473->enter($__internal_b11572a11b405df9bd7ed277d195bbdae25bc9a04eef6ba00c4bd1f527fb6473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b11572a11b405df9bd7ed277d195bbdae25bc9a04eef6ba00c4bd1f527fb6473->leave($__internal_b11572a11b405df9bd7ed277d195bbdae25bc9a04eef6ba00c4bd1f527fb6473_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_920d4aa2f6a6ba3fc7f76b2ce6b687831cf4d8a25cc61dcd87cf79499ebfd3a8 = $this->env->getExtension("native_profiler");
        $__internal_920d4aa2f6a6ba3fc7f76b2ce6b687831cf4d8a25cc61dcd87cf79499ebfd3a8->enter($__internal_920d4aa2f6a6ba3fc7f76b2ce6b687831cf4d8a25cc61dcd87cf79499ebfd3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Article ";
        
        $__internal_920d4aa2f6a6ba3fc7f76b2ce6b687831cf4d8a25cc61dcd87cf79499ebfd3a8->leave($__internal_920d4aa2f6a6ba3fc7f76b2ce6b687831cf4d8a25cc61dcd87cf79499ebfd3a8_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_4b1ba2c6bf7a72cdbed8650fd32e5db43a6690533707500e02234ce4382a90dc = $this->env->getExtension("native_profiler");
        $__internal_4b1ba2c6bf7a72cdbed8650fd32e5db43a6690533707500e02234ce4382a90dc->enter($__internal_4b1ba2c6bf7a72cdbed8650fd32e5db43a6690533707500e02234ce4382a90dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 6
        echo "<section>
<div class=\"container\">
    ";
        // line 8
        if (( !(null === (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))) ||  !twig_test_empty((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))))) {
            // line 9
            echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <article>
            <div class = \"panel panel-default\" style=\"margin-top: 10px;\">
                <div class = \"panel-heading\">
                    <h2>
                        ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "titre", array()), "html", null, true);
            echo "<small>, écrit par ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author", array()), "username", array()), "html", null, true);
            echo "</small>
                    </h2>
                    <br />
                    ";
            // line 19
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 20
                echo "                    <div class=\"pull-right\">

                        <div class=\"btn\"><a href=";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_EditPost", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
                echo "><img alt=\"Pencil\" src=\"https://cdn4.iconfinder.com/data/icons/32x32-free-design-icons/32/Pencil.png\" height=\"10\" width=\"10\"/></a></div> - <div class=\"btn\"><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_DeletePost", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
                echo "><img alt=\"Dialog-close\" src=\"http://www.andorrasportstraining.com/resources/images/Dialog-close.png\" height=\"10\" width=\"10\"/></a></div>
                    </div>
                    ";
            }
            // line 25
            echo "
                    <p><span class=\"glyphicon glyphicon-time\"></span> Ecrit le ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "datePublication", array()), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "datePublication", array()), "H:i:s"), "html", null, true);
            echo "</p>
                </div>
                <div class = \"panel-body\">

                    ";
            // line 31
            echo "
                    <p> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "contenu", array()), "html", null, true);
            echo " </p>




                </div>
            </div>
        </article>
        </div>

    </div>

";
        }
        // line 45
        echo "
<h4><small>Commentaire(s) :</small></h4>
";
        // line 47
        if ((twig_length_filter($this->env, (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))) > 0)) {
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 49
                echo "<div class=\"row\">
    <div class=\"col-sm-5\">
        <article>
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <strong>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "username", array()), "html", null, true);
                echo "</strong><span class=\"text-muted\">, <i><small>publié le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "datePublication", array()), "d/m/Y"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "datePublication", array()), "H:i:s"), "html", null, true);
                echo "</small></i></span> 
                ";
                // line 55
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    // line 56
                    echo "                <div class = 'pull-right'>
                    <a href=";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_EditComment", array("idP" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                    echo "><img alt=\"Pencil\" src=\"https://cdn4.iconfinder.com/data/icons/32x32-free-design-icons/32/Pencil.png\" height=\"10\" width=\"10\"/></a>&nbsp;-&nbsp;<a href=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_DeleteComment", array("idP" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                    echo "><img alt=\"Dialog_close\" src=\"http://www.andorrasportstraining.com/resources/images/Dialog-close.png\" height=\"10\" width=\"10\"/></a>
                </div>
                ";
                }
                // line 60
                echo "                <br>
                <small>(";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", array()), "email", array()), "html", null, true);
                echo ")</small>
            </div>
            <div class=\"panel-body\">
                ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "commentaire", array()), "html", null, true);
                echo "
            </div><!-- /panel-body -->
        </div><!-- /panel panel-default -->
    </article>
    </div><!-- /col-sm-5 -->
</div><!-- /row -->
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 72
            echo "<p> Il n'y a pas de commentaires à afficher. </p>
";
        }
        // line 74
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 75
            echo "<div class=\"container-fluid\">
   <div class=\"row\">
    <article>
    <div class=\"col-sm-5\">

        <h4>Laisser un commentaire</h4>

        ";
            // line 82
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
            echo "

        <div class=\"form-group\">
         ";
            // line 86
            echo "         ";
            // line 87
            echo "         ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
        </div>

     <div class=\"form-group\">
         ";
            // line 92
            echo "         ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "envoyer", array()), 'widget', array("attr" => array("class" => "btn pull-right")));
            echo "
     </div>

     ";
            // line 95
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "

    </div>
</article>
</div>
</div>
";
        } else {
            // line 102
            echo "<div class=\"container-fluid\">
   <div class=\"row\">
    <article>
    <div class=\"col-sm-5\">
         <div class=\"alert alert-warning\">
                <strong>Merci de vous connecter pour laisser un commentaire</strong>
        </div>
    </div>
</article>

</div>
</div>
";
        }
        // line 115
        echo "
</section>
";
        
        $__internal_4b1ba2c6bf7a72cdbed8650fd32e5db43a6690533707500e02234ce4382a90dc->leave($__internal_4b1ba2c6bf7a72cdbed8650fd32e5db43a6690533707500e02234ce4382a90dc_prof);

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
        return array (  245 => 115,  230 => 102,  220 => 95,  213 => 92,  205 => 87,  203 => 86,  197 => 82,  188 => 75,  186 => 74,  182 => 72,  168 => 64,  162 => 61,  159 => 60,  151 => 57,  148 => 56,  146 => 55,  138 => 54,  131 => 49,  127 => 48,  125 => 47,  121 => 45,  105 => 32,  102 => 31,  93 => 26,  90 => 25,  82 => 22,  78 => 20,  76 => 19,  68 => 16,  59 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %} Article {% endblock %}*/
/* */
/* {% block corps %}*/
/* <section>*/
/* <div class="container">*/
/*     {% if post is not null or post is not empty %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <article>*/
/*             <div class = "panel panel-default" style="margin-top: 10px;">*/
/*                 <div class = "panel-heading">*/
/*                     <h2>*/
/*                         {{ post.titre }}<small>, écrit par {{ post.author.username }}</small>*/
/*                     </h2>*/
/*                     <br />*/
/*                     {% if is_granted("ROLE_ADMIN") %}*/
/*                     <div class="pull-right">*/
/* */
/*                         <div class="btn"><a href={{path('admin_EditPost', {'id' : post.id})}}><img alt="Pencil" src="https://cdn4.iconfinder.com/data/icons/32x32-free-design-icons/32/Pencil.png" height="10" width="10"/></a></div> - <div class="btn"><a href={{path('admin_DeletePost', {'id' : post.id})}}><img alt="Dialog-close" src="http://www.andorrasportstraining.com/resources/images/Dialog-close.png" height="10" width="10"/></a></div>*/
/*                     </div>*/
/*                     {% endif %}*/
/* */
/*                     <p><span class="glyphicon glyphicon-time"></span> Ecrit le {{post.datePublication|date("d/m/Y")}} à {{post.datePublication|date("H:i:s")}}</p>*/
/*                 </div>*/
/*                 <div class = "panel-body">*/
/* */
/*                     {# {{ count }} commentaires #}*/
/* */
/*                     <p> {{ post.contenu }} </p>*/
/* */
/* */
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*         </article>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endif %}*/
/* */
/* <h4><small>Commentaire(s) :</small></h4>*/
/* {% if comments|length > 0 %}*/
/* {% for comment in comments %}*/
/* <div class="row">*/
/*     <div class="col-sm-5">*/
/*         <article>*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <strong>{{ comment.user.username }}</strong><span class="text-muted">, <i><small>publié le {{comment.datePublication|date("d/m/Y")}} à {{comment.datePublication|date("H:i:s")}}</small></i></span> */
/*                 {% if is_granted("ROLE_ADMIN") %}*/
/*                 <div class = 'pull-right'>*/
/*                     <a href={{path('admin_EditComment', {'idP':post.id,'id' : comment.id})}}><img alt="Pencil" src="https://cdn4.iconfinder.com/data/icons/32x32-free-design-icons/32/Pencil.png" height="10" width="10"/></a>&nbsp;-&nbsp;<a href={{path('admin_DeleteComment', {'idP' : post.id,'id' : comment.id})}}><img alt="Dialog_close" src="http://www.andorrasportstraining.com/resources/images/Dialog-close.png" height="10" width="10"/></a>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 <br>*/
/*                 <small>({{ comment.user.email }})</small>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 {{ comment.commentaire }}*/
/*             </div><!-- /panel-body -->*/
/*         </div><!-- /panel panel-default -->*/
/*     </article>*/
/*     </div><!-- /col-sm-5 -->*/
/* </div><!-- /row -->*/
/* {% endfor %}*/
/* {% else %}*/
/* <p> Il n'y a pas de commentaires à afficher. </p>*/
/* {% endif %}*/
/* {% if is_granted("IS_AUTHENTICATED_FULLY") %}*/
/* <div class="container-fluid">*/
/*    <div class="row">*/
/*     <article>*/
/*     <div class="col-sm-5">*/
/* */
/*         <h4>Laisser un commentaire</h4>*/
/* */
/*         {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*         <div class="form-group">*/
/*          {# {{ form_errors(form.commentaire) }} #}*/
/*          {# {{ form_label(form.commentaire, 'commentaire' , {'label_attr': {'class': 'col-sm-3 control-label '}}) }} #}*/
/*          {{ form_widget(form.commentaire, {'attr': {'class':'form-control'}}) }}*/
/*         </div>*/
/* */
/*      <div class="form-group">*/
/*          {# {{ form_label(form.envoyer, "Envoyer", {'label_attr': {'class': 'btn pull-right'}}) }} #}*/
/*          {{ form_widget(form.envoyer, {'attr': {'class':'btn pull-right'}}) }}*/
/*      </div>*/
/* */
/*      {{ form_end(form) }}*/
/* */
/*     </div>*/
/* </article>*/
/* </div>*/
/* </div>*/
/* {%else%}*/
/* <div class="container-fluid">*/
/*    <div class="row">*/
/*     <article>*/
/*     <div class="col-sm-5">*/
/*          <div class="alert alert-warning">*/
/*                 <strong>Merci de vous connecter pour laisser un commentaire</strong>*/
/*         </div>*/
/*     </div>*/
/* </article>*/
/* */
/* </div>*/
/* </div>*/
/* {%endif%}*/
/* */
/* </section>*/
/* {% endblock %}*/
