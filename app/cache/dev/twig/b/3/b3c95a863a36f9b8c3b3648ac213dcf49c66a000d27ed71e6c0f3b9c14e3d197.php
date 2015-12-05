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
        $__internal_0f66058d04d1902c91f09d2aadfcb779238b824c601c5dc10163dd24de6c0711 = $this->env->getExtension("native_profiler");
        $__internal_0f66058d04d1902c91f09d2aadfcb779238b824c601c5dc10163dd24de6c0711->enter($__internal_0f66058d04d1902c91f09d2aadfcb779238b824c601c5dc10163dd24de6c0711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:addPost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f66058d04d1902c91f09d2aadfcb779238b824c601c5dc10163dd24de6c0711->leave($__internal_0f66058d04d1902c91f09d2aadfcb779238b824c601c5dc10163dd24de6c0711_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_391390f2ed4b1b72bf1212101f23c5c2b30f7124152a0326678083c6b33bdbfb = $this->env->getExtension("native_profiler");
        $__internal_391390f2ed4b1b72bf1212101f23c5c2b30f7124152a0326678083c6b33bdbfb->enter($__internal_391390f2ed4b1b72bf1212101f23c5c2b30f7124152a0326678083c6b33bdbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ajout d'un article ";
        
        $__internal_391390f2ed4b1b72bf1212101f23c5c2b30f7124152a0326678083c6b33bdbfb->leave($__internal_391390f2ed4b1b72bf1212101f23c5c2b30f7124152a0326678083c6b33bdbfb_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_945409b6e7b3944f9734d031d75672f836ca2edcf61bcf9c11a6b6d6dbf28520 = $this->env->getExtension("native_profiler");
        $__internal_945409b6e7b3944f9734d031d75672f836ca2edcf61bcf9c11a6b6d6dbf28520->enter($__internal_945409b6e7b3944f9734d031d75672f836ca2edcf61bcf9c11a6b6d6dbf28520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 6
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/BlogBundle/js/jquery.datetimepicker.js"), "html", null, true);
        echo "\"></script>
<section>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<article>
\t\t\t\t\t<div class=\"panel panel-default\" style=\" margin-top: 10px;\">
\t\t\t\t\t\t<div class = \"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"text-center text-info\">
\t\t\t\t\t\t\t\tInsérer un article
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class = \"panel-body\">
\t\t\t\t\t\t\t";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre de l'article"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "

\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Contenu de l'article"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'errors');
        echo "


\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePublication", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date de l'article"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePublication", array()), 'errors');
        echo "

\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datePublication", array()), 'widget', array("attr" => array("class" => "datetime")));
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Enregistrer l'article"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo "

\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Valider", array()), 'widget', array("attr" => array("class" => "btn btn-primary pull-right")));
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<script>
\$(function(){
\t\$('#form_datePublication_date').datetimepicker({
\t\tformat: \"dd/mm/yyyy\",
\t\ttimepicker: false,
\t\tdatepicker: true,
\t});
\t\$('#form_datePublication_time').datetimepicker({
\t\tformat: \"H:i\",
\t\ttimepicker: true,
\t\tdatepicker: false,
\t\tstep:5
\t});
});
</script>



";
        
        $__internal_945409b6e7b3944f9734d031d75672f836ca2edcf61bcf9c11a6b6d6dbf28520->leave($__internal_945409b6e7b3944f9734d031d75672f836ca2edcf61bcf9c11a6b6d6dbf28520_prof);

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
        return array (  147 => 57,  141 => 54,  135 => 51,  131 => 50,  123 => 45,  117 => 42,  113 => 41,  105 => 36,  98 => 32,  94 => 31,  86 => 26,  80 => 23,  76 => 22,  70 => 19,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %} Ajout d'un article {% endblock %}*/
/* */
/* {% block corps %}*/
/* <script type="text/javascript" src="{{ asset('bundles/BlogBundle/js/jquery.datetimepicker.js') }}"></script>*/
/* <section>*/
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			<div class="col-md-12">*/
/* 				<article>*/
/* 					<div class="panel panel-default" style=" margin-top: 10px;">*/
/* 						<div class = "panel-heading">*/
/* 							<h3 class="text-center text-info">*/
/* 								Insérer un article*/
/* 							</h3>*/
/* 						</div>*/
/* 						<div class = "panel-body">*/
/* 							{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/* 							<div class="form-group">*/
/* 								{{ form_label(form.titre, "Titre de l'article", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 								{{ form_errors(form.titre) }}*/
/* */
/* 								<div class="col-sm-4">*/
/* 									{{ form_widget(form.titre, {'attr': {'class':'form-control'}}) }}*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div class="form-group">*/
/* 								{{ form_label(form.contenu, "Contenu de l'article", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 								{{ form_errors(form.contenu) }}*/
/* */
/* */
/* 								<div class="col-sm-4">*/
/* 									{{ form_widget(form.contenu, {'attr': {'class':'form-control'}}) }}*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div class="form-group">*/
/* 								{{ form_label(form.datePublication, "Date de l'article", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 								{{ form_errors(form.datePublication) }}*/
/* */
/* 								<div class="col-sm-4">*/
/* 									{{ form_widget(form.datePublication,{'attr': {'class':'datetime'}}) }}*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 							<div class="form-group">*/
/* 								{{ form_label(form.Valider, "Enregistrer l'article", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 								{{ form_errors(form.titre) }}*/
/* */
/* 								<div class="col-sm-4">*/
/* 									{{ form_widget(form.Valider, {'attr': {'class':'btn btn-primary pull-right'}}) }}*/
/* 								</div>*/
/* 							</div>*/
/* 							{{ form_end(form) }}*/
/* 						</div>*/
/* 					</div>*/
/* 				</article>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* <script>*/
/* $(function(){*/
/* 	$('#form_datePublication_date').datetimepicker({*/
/* 		format: "dd/mm/yyyy",*/
/* 		timepicker: false,*/
/* 		datepicker: true,*/
/* 	});*/
/* 	$('#form_datePublication_time').datetimepicker({*/
/* 		format: "H:i",*/
/* 		timepicker: true,*/
/* 		datepicker: false,*/
/* 		step:5*/
/* 	});*/
/* });*/
/* </script>*/
/* */
/* */
/* */
/* {% endblock %}*/
