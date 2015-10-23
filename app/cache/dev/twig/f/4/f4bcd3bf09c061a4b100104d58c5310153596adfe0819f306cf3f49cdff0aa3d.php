<?php

/* base.html.twig */
class __TwigTemplate_30ce044399724c094d8a1cf04f6cdae1b065a2c1221e5e90a5d4844f23df0752 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aad70ee8b64f78201de09876372f23d258b61e94748ccaa1d1bb21b30f8dcf8d = $this->env->getExtension("native_profiler");
        $__internal_aad70ee8b64f78201de09876372f23d258b61e94748ccaa1d1bb21b30f8dcf8d->enter($__internal_aad70ee8b64f78201de09876372f23d258b61e94748ccaa1d1bb21b30f8dcf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_aad70ee8b64f78201de09876372f23d258b61e94748ccaa1d1bb21b30f8dcf8d->leave($__internal_aad70ee8b64f78201de09876372f23d258b61e94748ccaa1d1bb21b30f8dcf8d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a1b1d79ccb58ed80cec38dcb963e59ddd2689310b59818ef285886573065c8d = $this->env->getExtension("native_profiler");
        $__internal_7a1b1d79ccb58ed80cec38dcb963e59ddd2689310b59818ef285886573065c8d->enter($__internal_7a1b1d79ccb58ed80cec38dcb963e59ddd2689310b59818ef285886573065c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7a1b1d79ccb58ed80cec38dcb963e59ddd2689310b59818ef285886573065c8d->leave($__internal_7a1b1d79ccb58ed80cec38dcb963e59ddd2689310b59818ef285886573065c8d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31ace3ad556e5eb6b9546fff0fcf5e161a3f1f6feda5d1ca180263fe0237460e = $this->env->getExtension("native_profiler");
        $__internal_31ace3ad556e5eb6b9546fff0fcf5e161a3f1f6feda5d1ca180263fe0237460e->enter($__internal_31ace3ad556e5eb6b9546fff0fcf5e161a3f1f6feda5d1ca180263fe0237460e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_31ace3ad556e5eb6b9546fff0fcf5e161a3f1f6feda5d1ca180263fe0237460e->leave($__internal_31ace3ad556e5eb6b9546fff0fcf5e161a3f1f6feda5d1ca180263fe0237460e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3792895385d0fa2fef92ce5a2652eb7c987e74839f8f123e3f1db9884f5340a = $this->env->getExtension("native_profiler");
        $__internal_e3792895385d0fa2fef92ce5a2652eb7c987e74839f8f123e3f1db9884f5340a->enter($__internal_e3792895385d0fa2fef92ce5a2652eb7c987e74839f8f123e3f1db9884f5340a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e3792895385d0fa2fef92ce5a2652eb7c987e74839f8f123e3f1db9884f5340a->leave($__internal_e3792895385d0fa2fef92ce5a2652eb7c987e74839f8f123e3f1db9884f5340a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_441840ec075260d0e532c9763e041f8a902d12664fed77999a31a2667dc99eef = $this->env->getExtension("native_profiler");
        $__internal_441840ec075260d0e532c9763e041f8a902d12664fed77999a31a2667dc99eef->enter($__internal_441840ec075260d0e532c9763e041f8a902d12664fed77999a31a2667dc99eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_441840ec075260d0e532c9763e041f8a902d12664fed77999a31a2667dc99eef->leave($__internal_441840ec075260d0e532c9763e041f8a902d12664fed77999a31a2667dc99eef_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
