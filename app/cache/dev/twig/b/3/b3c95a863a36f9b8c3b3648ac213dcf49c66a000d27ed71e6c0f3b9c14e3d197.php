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
        $__internal_00f8a0e6e9efbd0f4a3582f72498f6662f9c1ce177d2af8aac82c95eb97cce5c = $this->env->getExtension("native_profiler");
        $__internal_00f8a0e6e9efbd0f4a3582f72498f6662f9c1ce177d2af8aac82c95eb97cce5c->enter($__internal_00f8a0e6e9efbd0f4a3582f72498f6662f9c1ce177d2af8aac82c95eb97cce5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:addPost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00f8a0e6e9efbd0f4a3582f72498f6662f9c1ce177d2af8aac82c95eb97cce5c->leave($__internal_00f8a0e6e9efbd0f4a3582f72498f6662f9c1ce177d2af8aac82c95eb97cce5c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_191a5e5bc9358be3e4996bc51ecb36be45ab554445744d3b7dece9f4460e0560 = $this->env->getExtension("native_profiler");
        $__internal_191a5e5bc9358be3e4996bc51ecb36be45ab554445744d3b7dece9f4460e0560->enter($__internal_191a5e5bc9358be3e4996bc51ecb36be45ab554445744d3b7dece9f4460e0560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_191a5e5bc9358be3e4996bc51ecb36be45ab554445744d3b7dece9f4460e0560->leave($__internal_191a5e5bc9358be3e4996bc51ecb36be45ab554445744d3b7dece9f4460e0560_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_e10c3fac1840eaa4cc046b47785ebbded2bec75ef889956da65cad89b6999998 = $this->env->getExtension("native_profiler");
        $__internal_e10c3fac1840eaa4cc046b47785ebbded2bec75ef889956da65cad89b6999998->enter($__internal_e10c3fac1840eaa4cc046b47785ebbded2bec75ef889956da65cad89b6999998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

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
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePublication", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date de l'article"));
        echo "
\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePublication", array()), 'errors');
        echo "

\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePublication", array()), 'widget');
        echo "
\t\t\t\t\t\t</div>
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
\t</div>

";
        
        $__internal_e10c3fac1840eaa4cc046b47785ebbded2bec75ef889956da65cad89b6999998->leave($__internal_e10c3fac1840eaa4cc046b47785ebbded2bec75ef889956da65cad89b6999998_prof);

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
        return array (  140 => 52,  133 => 48,  127 => 45,  123 => 44,  115 => 39,  109 => 36,  105 => 35,  97 => 30,  90 => 26,  86 => 25,  78 => 20,  72 => 17,  68 => 16,  62 => 13,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
