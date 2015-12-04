<?php

/* BlogBundle:Blog:addPost.html.twig */
class __TwigTemplate_f7b320c847104ad35a5ba2eef4871667d3c468f0f22764a92da18686556c6191 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "BlogBundle:Blog:addPost.html.twig", 1);
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
        $__internal_41faa82d57b3596165f547394adf09075cd641915b64cfe57e0cf69424c537e2 = $this->env->getExtension("native_profiler");
        $__internal_41faa82d57b3596165f547394adf09075cd641915b64cfe57e0cf69424c537e2->enter($__internal_41faa82d57b3596165f547394adf09075cd641915b64cfe57e0cf69424c537e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:addPost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41faa82d57b3596165f547394adf09075cd641915b64cfe57e0cf69424c537e2->leave($__internal_41faa82d57b3596165f547394adf09075cd641915b64cfe57e0cf69424c537e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_01ed0e283111acd6a7a9d10b209cabda0eb1ca64d47804aa4f5e10ec59f5d9a1 = $this->env->getExtension("native_profiler");
        $__internal_01ed0e283111acd6a7a9d10b209cabda0eb1ca64d47804aa4f5e10ec59f5d9a1->enter($__internal_01ed0e283111acd6a7a9d10b209cabda0eb1ca64d47804aa4f5e10ec59f5d9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_01ed0e283111acd6a7a9d10b209cabda0eb1ca64d47804aa4f5e10ec59f5d9a1->leave($__internal_01ed0e283111acd6a7a9d10b209cabda0eb1ca64d47804aa4f5e10ec59f5d9a1_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_1677c81d9ce3c55b0304524e99d801ecb568ef7ca3c88130770d8e8fd87711c1 = $this->env->getExtension("native_profiler");
        $__internal_1677c81d9ce3c55b0304524e99d801ecb568ef7ca3c88130770d8e8fd87711c1->enter($__internal_1677c81d9ce3c55b0304524e99d801ecb568ef7ca3c88130770d8e8fd87711c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 6
        echo "    \t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/BlogBundle/js/jquery.datetimepicker.js"), "html", null, true);
        echo "\"></script>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"panel panel-default\" style=\" margin-top: 10px;\">
\t\t\t\t<div id=\"content\" style=\"margin-top: 10px;\">
\t\t\t\t\t<center><h3> Inserer un article <h3></center>

\t\t\t\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre de l'article"));
        echo "
\t\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "

\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Contenu de l'article"));
        echo "
\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "


\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePublication", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date de l'article"));
        echo "
\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePublication", array()), 'errors');
        echo "

\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePublication", array()), 'widget', array("attr" => array("class" => "datetime")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Enregistrer l'article"));
        echo "
\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "

\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'widget', array("attr" => array("class" => "btn btn-primary pull-right")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t

\t\t\t\t\t";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

    \t<script>
    \t\t\$(function(){
\t\t\t    \$('#form_datePublication_date').datetimepicker({
\t\t\t        format: \"dd/mm/yyyy\",
\t\t\t        timepicker: false,
\t\t\t        datepicker: true,
\t\t\t    });
\t\t\t    \$('#form_datePublication_time').datetimepicker({
\t\t\t        format: \"H:i\",
\t\t\t        timepicker: true,
\t\t\t        datepicker: false,
\t\t\t        step:5
\t\t\t    });
\t\t\t});
    \t</script>
\t</div>


";
        
        $__internal_1677c81d9ce3c55b0304524e99d801ecb568ef7ca3c88130770d8e8fd87711c1->leave($__internal_1677c81d9ce3c55b0304524e99d801ecb568ef7ca3c88130770d8e8fd87711c1_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:addPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 52,  135 => 48,  129 => 45,  125 => 44,  117 => 39,  111 => 36,  107 => 35,  99 => 30,  92 => 26,  88 => 25,  80 => 20,  74 => 17,  70 => 16,  64 => 13,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %} Accueil {% endblock %}*/
/* */
/* {% block corps %}*/
/*     	<script type="text/javascript" src="{{ asset('bundles/BlogBundle/js/jquery.datetimepicker.js') }}"></script>*/
/* 	<div class="row">*/
/* 		<div class="col-md-12">*/
/* 			<div class="panel panel-default" style=" margin-top: 10px;">*/
/* 				<div id="content" style="margin-top: 10px;">*/
/* 					<center><h3> Inserer un article <h3></center>*/
/* */
/* 					{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/* 					<div class="form-group">*/
/* 					{{ form_label(form.titre, "Titre de l'article", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 					{{ form_errors(form.titre) }}*/
/* */
/* 						<div class="col-sm-4">*/
/* 							{{ form_widget(form.titre, {'attr': {'class':'form-control'}}) }}*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="form-group">*/
/* 					{{ form_label(form.contenu, "Contenu de l'article", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 					{{ form_errors(form.contenu) }}*/
/* */
/* */
/* 						<div class="col-sm-4">*/
/* 							{{ form_widget(form.contenu, {'attr': {'class':'form-control'}}) }}*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="form-group">*/
/* 							{{ form_label(form.datePublication, "Date de l'article", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 							{{ form_errors(form.datePublication) }}*/
/* */
/* 							<div class="col-sm-4">*/
/* 								{{ form_widget(form.datePublication,{'attr': {'class':'datetime'}}) }}*/
/* 							</div>*/
/* 					</div>*/
/* */
/* 					<div class="form-group">*/
/* 					{{ form_label(form.Valider, "Enregistrer l'article", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 					{{ form_errors(form.titre) }}*/
/* */
/* 						<div class="col-sm-4">*/
/* 							{{ form_widget(form.Valider, {'attr': {'class':'btn btn-primary pull-right'}}) }}*/
/* 						</div>*/
/* 					*/
/* */
/* 					{{ form_end(form) }}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/*     	<script>*/
/*     		$(function(){*/
/* 			    $('#form_datePublication_date').datetimepicker({*/
/* 			        format: "dd/mm/yyyy",*/
/* 			        timepicker: false,*/
/* 			        datepicker: true,*/
/* 			    });*/
/* 			    $('#form_datePublication_time').datetimepicker({*/
/* 			        format: "H:i",*/
/* 			        timepicker: true,*/
/* 			        datepicker: false,*/
/* 			        step:5*/
/* 			    });*/
/* 			});*/
/*     	</script>*/
/* 	</div>*/
/* */
/* */
/* {% endblock %}*/
