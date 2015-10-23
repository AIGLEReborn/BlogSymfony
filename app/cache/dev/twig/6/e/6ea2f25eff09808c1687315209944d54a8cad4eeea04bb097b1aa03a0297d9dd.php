<?php

/* ::layout.html.twig */
class __TwigTemplate_aca6f54d794f021e8e44b5500406c8a9ac5aee8f171f6c2da15d51ebce56e162 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'corps' => array($this, 'block_corps'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f2e1873c236f9e757745c729b4418bb1367803b077cbf5362441ae98a1cdd40 = $this->env->getExtension("native_profiler");
        $__internal_9f2e1873c236f9e757745c729b4418bb1367803b077cbf5362441ae98a1cdd40->enter($__internal_9f2e1873c236f9e757745c729b4418bb1367803b077cbf5362441ae98a1cdd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <link rel=\"icon\" href=\"http://getbootstrap.com/favicon.ico\">

        <title>Blog - ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"http://getbootstrap.com/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"http://getbootstrap.com/examples/dashboard/dashboard.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/BlogBundle/css/main.css"), "html", null, true);
        echo "\" rel=\"styleshee\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
    <script src=\"http://getbootstrap.com/dist/js/bootstrap.min.js\"></script>
    <script src=\"http://getbootstrap.com/assets/js/docs.min.js\"></script>
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    </head>

    <body>

\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t 
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t\t\t\t\t\t <span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button> <a class=\"navbar-brand\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("blog_homepage");
        echo "\">Groland's Blog</a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("blog_AddPost");
        echo "\">Ajouter un article</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Link</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<form class=\"navbar-form navbar-left\" role=\"search\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" />
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\tSubmit
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Link</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown<strong class=\"caret\"></strong></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Action</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"divider\">
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Separated link</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</nav>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t ";
        // line 87
        $this->displayBlock('corps', $context, $blocks);
        // line 88
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  ";
        // line 99
        $this->displayBlock('script', $context, $blocks);
        // line 100
        echo "</body></html>";
        
        $__internal_9f2e1873c236f9e757745c729b4418bb1367803b077cbf5362441ae98a1cdd40->leave($__internal_9f2e1873c236f9e757745c729b4418bb1367803b077cbf5362441ae98a1cdd40_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9054f17b30d9c2448122c83261652e65de9e78f1d0edcd79523b13f82a5f0b2 = $this->env->getExtension("native_profiler");
        $__internal_a9054f17b30d9c2448122c83261652e65de9e78f1d0edcd79523b13f82a5f0b2->enter($__internal_a9054f17b30d9c2448122c83261652e65de9e78f1d0edcd79523b13f82a5f0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a9054f17b30d9c2448122c83261652e65de9e78f1d0edcd79523b13f82a5f0b2->leave($__internal_a9054f17b30d9c2448122c83261652e65de9e78f1d0edcd79523b13f82a5f0b2_prof);

    }

    // line 87
    public function block_corps($context, array $blocks = array())
    {
        $__internal_9e8cc7b1b4ec0471d1666f9ea38b4cdcd26ec728b0966528962f580401203eb2 = $this->env->getExtension("native_profiler");
        $__internal_9e8cc7b1b4ec0471d1666f9ea38b4cdcd26ec728b0966528962f580401203eb2->enter($__internal_9e8cc7b1b4ec0471d1666f9ea38b4cdcd26ec728b0966528962f580401203eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        
        $__internal_9e8cc7b1b4ec0471d1666f9ea38b4cdcd26ec728b0966528962f580401203eb2->leave($__internal_9e8cc7b1b4ec0471d1666f9ea38b4cdcd26ec728b0966528962f580401203eb2_prof);

    }

    // line 99
    public function block_script($context, array $blocks = array())
    {
        $__internal_47a626c6ab65bf17dc79108c71d12fa59994b4b11577b0801622da8e44f9aada = $this->env->getExtension("native_profiler");
        $__internal_47a626c6ab65bf17dc79108c71d12fa59994b4b11577b0801622da8e44f9aada->enter($__internal_47a626c6ab65bf17dc79108c71d12fa59994b4b11577b0801622da8e44f9aada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_47a626c6ab65bf17dc79108c71d12fa59994b4b11577b0801622da8e44f9aada->leave($__internal_47a626c6ab65bf17dc79108c71d12fa59994b4b11577b0801622da8e44f9aada_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 99,  160 => 87,  149 => 12,  142 => 100,  140 => 99,  127 => 88,  125 => 87,  77 => 42,  68 => 36,  44 => 15,  38 => 12,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/*         <link rel="icon" href="http://getbootstrap.com/favicon.ico">*/
/* */
/*         <title>Blog - {% block title %}{% endblock %}</title>*/
/*     <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">*/
/*     <link href="http://getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">*/
/*     <link href="{{asset('bundles/BlogBundle/css/main.css') }}" rel="styleshee">*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>*/
/*     <script type="text/javascript" src="https://www.google.com/jsapi"></script>*/
/*     <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>*/
/*     <script src="http://getbootstrap.com/assets/js/docs.min.js"></script>*/
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*     </head>*/
/* */
/*     <body>*/
/* */
/* 	<div class="container-fluid">*/
/* 		<div class="row">*/
/* 			<div class="col-md-12">*/
/* 				<nav class="navbar navbar-default navbar-fixed-top" role="navigation">*/
/* 					<div class="navbar-header">*/
/* 						 */
/* 						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/* 							 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>*/
/* 						</button> <a class="navbar-brand" href="{{path('blog_homepage')}}">Groland's Blog</a>*/
/* 					</div>*/
/* 					*/
/* 					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* 						<ul class="nav navbar-nav">*/
/* 							<li>*/
/* 								<a href="{{path('blog_AddPost')}}">Ajouter un article</a>*/
/* 							</li>*/
/* 							<li>*/
/* 								<a href="#">Link</a>*/
/* 							</li>*/
/* 						</ul>*/
/* 						<form class="navbar-form navbar-left" role="search">*/
/* 							<div class="form-group">*/
/* 								<input type="text" class="form-control" />*/
/* 							</div> */
/* 							<button type="submit" class="btn btn-default">*/
/* 								Submit*/
/* 							</button>*/
/* 						</form>*/
/* 						<ul class="nav navbar-nav navbar-right">*/
/* 							<li>*/
/* 								<a href="#">Link</a>*/
/* 							</li>*/
/* 							<li class="dropdown">*/
/* 								 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>*/
/* 								<ul class="dropdown-menu">*/
/* 									<li>*/
/* 										<a href="#">Action</a>*/
/* 									</li>*/
/* 									<li>*/
/* 										<a href="#">Another action</a>*/
/* 									</li>*/
/* 									<li>*/
/* 										<a href="#">Something else here</a>*/
/* 									</li>*/
/* 									<li class="divider">*/
/* 									</li>*/
/* 									<li>*/
/* 										<a href="#">Separated link</a>*/
/* 									</li>*/
/* 								</ul>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 					*/
/* 				</nav>*/
/* 				<div class="row">*/
/* 					<div class="col-md-2">*/
/* 					</div>*/
/* 					<div class="col-md-8">*/
/* 						 {% block corps %}{% endblock %}*/
/* 					</div>*/
/* 					<div class="col-md-2">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/*     <!-- Bootstrap core JavaScript*/
/*     ================================================== -->*/
/*     <!-- Placed at the end of the document so the pages load faster -->*/
/*   {% block script %}{% endblock %}*/
/* </body></html>*/
