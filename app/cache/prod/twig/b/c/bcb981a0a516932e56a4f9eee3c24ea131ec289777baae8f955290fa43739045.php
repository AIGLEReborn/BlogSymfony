<?php

/* ::layout.html.twig */
class __TwigTemplate_e9cc9d9d3a3fc5ae1aead41e72f6c823e30a044e4d6ccaf77619fe2cc33d9275 extends Twig_Template
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
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
    }

    // line 87
    public function block_corps($context, array $blocks = array())
    {
    }

    // line 99
    public function block_script($context, array $blocks = array())
    {
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
        return array (  153 => 99,  148 => 87,  143 => 12,  139 => 100,  137 => 99,  124 => 88,  122 => 87,  74 => 42,  65 => 36,  41 => 15,  35 => 12,  22 => 1,);
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
