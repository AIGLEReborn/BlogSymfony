<?php

/* BlogBundle:Blog:addPost.html.twig */
class __TwigTemplate_2820921837418f24bd70bbbdb4a5a4824cc9b87274d6db40b41bb0cbb60cc31a extends Twig_Template
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
        $__internal_32875570cec83e136244e6e09a4b5ec8ce8d32dec2c4022fdc6306389e046ae7 = $this->env->getExtension("native_profiler");
        $__internal_32875570cec83e136244e6e09a4b5ec8ce8d32dec2c4022fdc6306389e046ae7->enter($__internal_32875570cec83e136244e6e09a4b5ec8ce8d32dec2c4022fdc6306389e046ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:addPost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32875570cec83e136244e6e09a4b5ec8ce8d32dec2c4022fdc6306389e046ae7->leave($__internal_32875570cec83e136244e6e09a4b5ec8ce8d32dec2c4022fdc6306389e046ae7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5e9e59b72c8c843e72d14df3a55da1f001e80fe174a5eb8ef48d92a7cd95a69 = $this->env->getExtension("native_profiler");
        $__internal_f5e9e59b72c8c843e72d14df3a55da1f001e80fe174a5eb8ef48d92a7cd95a69->enter($__internal_f5e9e59b72c8c843e72d14df3a55da1f001e80fe174a5eb8ef48d92a7cd95a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_f5e9e59b72c8c843e72d14df3a55da1f001e80fe174a5eb8ef48d92a7cd95a69->leave($__internal_f5e9e59b72c8c843e72d14df3a55da1f001e80fe174a5eb8ef48d92a7cd95a69_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_fed49bd2b7ebee1aab77768081af76c92ae2a4b7b0733aa141e2a9517ae21df3 = $this->env->getExtension("native_profiler");
        $__internal_fed49bd2b7ebee1aab77768081af76c92ae2a4b7b0733aa141e2a9517ae21df3->enter($__internal_fed49bd2b7ebee1aab77768081af76c92ae2a4b7b0733aa141e2a9517ae21df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 6
        echo "
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
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePublication", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date de l'article"));
        echo "
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePublication", array()), 'errors');
        echo "

\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePublication", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Enregistrer l'article"));
        echo "
\t\t\t\t\t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "

\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'widget', array("attr" => array("class" => "btn btn-primary pull-right")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t

\t\t\t\t\t";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_fed49bd2b7ebee1aab77768081af76c92ae2a4b7b0733aa141e2a9517ae21df3->leave($__internal_fed49bd2b7ebee1aab77768081af76c92ae2a4b7b0733aa141e2a9517ae21df3_prof);

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
        return array (  139 => 51,  132 => 47,  126 => 44,  122 => 43,  114 => 38,  108 => 35,  104 => 34,  96 => 29,  90 => 26,  86 => 25,  78 => 20,  72 => 17,  68 => 16,  62 => 13,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %} Accueil {% endblock %}*/
/* */
/* {% block corps %}*/
/* */
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
/* 						<div class="col-sm-4">*/
/* 							{{ form_widget(form.contenu, {'attr': {'class':'form-control'}}) }}*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="form-group">*/
/* 					{{ form_label(form.datePublication, "Date de l'article", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 					{{ form_errors(form.datePublication) }}*/
/* */
/* 						<div class="col-sm-4">*/
/* 							{{ form_widget(form.datePublication) }}*/
/* 						</div>*/
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
/* 	</div>*/
/* */
/* {% endblock %}*/
