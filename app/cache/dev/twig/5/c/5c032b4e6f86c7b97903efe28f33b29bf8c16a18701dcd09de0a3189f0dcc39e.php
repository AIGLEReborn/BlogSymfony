<?php

/* ::layout.html.twig */
class __TwigTemplate_b7804592fbc63008e40d124c9d49dba88d0963b86eafcefc4bf0b0ca923cbceb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe845c72add370b204f043abeb47d4a1cef5687dd7ae8eeeacdea7565ae7a0d7 = $this->env->getExtension("native_profiler");
        $__internal_fe845c72add370b204f043abeb47d4a1cef5687dd7ae8eeeacdea7565ae7a0d7->enter($__internal_fe845c72add370b204f043abeb47d4a1cef5687dd7ae8eeeacdea7565ae7a0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Groland's Blog - ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/BlogBundle/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/BlogBundle/css/blog-home.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"http://getbootstrap.com/examples/dashboard/dashboard.css\" rel=\"stylesheet\">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("blog_homepage");
        echo "\">Groland's Blog</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("blog_AddPost");
        echo "\">Ajouter un article</a>
                    </li>
                    <li>
                        <a href=\"#\">Ajouter un administrateur</a>
                    </li>
                    <!--<li>
                        <a href=\"#\">Contact</a>
                    </li>-->
                </ul>

                <ul class=\"nav navbar-nav navbar-right\">


\t\t\t\t\t\t\t";
        // line 64
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 65
            echo "                                <li><a href=\"#\">%PSEUDO%</a></li>
                                <li>
                                    <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Deconnection</a>
                                </li>
                            ";
        } else {
            // line 70
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
                                <li><a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Register</a></li>
                            ";
        }
        // line 73
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--<li class=\"dropdown\">
\t\t\t\t\t\t\t\t <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Menu<strong class=\"caret\"></strong></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Deconnection</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>-->
\t\t\t\t\t\t</ul>
            </div>


            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    ";
        // line 97
        $this->displayBlock('corps', $context, $blocks);
        // line 98
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"http://getbootstrap.com/dist/js/bootstrap.min.js\"></script>
</body>
</html>";
        
        $__internal_fe845c72add370b204f043abeb47d4a1cef5687dd7ae8eeeacdea7565ae7a0d7->leave($__internal_fe845c72add370b204f043abeb47d4a1cef5687dd7ae8eeeacdea7565ae7a0d7_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2290a1ef72d871e3fa67cd89c2e85db468bc1900a6563e7ffb830926433c973 = $this->env->getExtension("native_profiler");
        $__internal_e2290a1ef72d871e3fa67cd89c2e85db468bc1900a6563e7ffb830926433c973->enter($__internal_e2290a1ef72d871e3fa67cd89c2e85db468bc1900a6563e7ffb830926433c973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e2290a1ef72d871e3fa67cd89c2e85db468bc1900a6563e7ffb830926433c973->leave($__internal_e2290a1ef72d871e3fa67cd89c2e85db468bc1900a6563e7ffb830926433c973_prof);

    }

    // line 97
    public function block_corps($context, array $blocks = array())
    {
        $__internal_d96a7f72044de8342c8dee0d61ecec1ae20fca05394ae1d9de25a256857283d4 = $this->env->getExtension("native_profiler");
        $__internal_d96a7f72044de8342c8dee0d61ecec1ae20fca05394ae1d9de25a256857283d4->enter($__internal_d96a7f72044de8342c8dee0d61ecec1ae20fca05394ae1d9de25a256857283d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        
        $__internal_d96a7f72044de8342c8dee0d61ecec1ae20fca05394ae1d9de25a256857283d4->leave($__internal_d96a7f72044de8342c8dee0d61ecec1ae20fca05394ae1d9de25a256857283d4_prof);

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
        return array (  179 => 97,  168 => 12,  157 => 98,  155 => 97,  133 => 78,  126 => 73,  121 => 71,  116 => 70,  110 => 67,  106 => 65,  104 => 64,  88 => 51,  79 => 45,  48 => 17,  43 => 15,  37 => 12,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>Groland's Blog - {% block title %}{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="{{asset('bundles/BlogBundle/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <!-- Custom CSS -->*/
/*     <link href="{{asset('bundles/BlogBundle/css/blog-home.css') }}" rel="stylesheet">*/
/* */
/*     <link href="http://getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">*/
/* */
/* */
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/*     <!-- Navigation -->*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="{{path('blog_homepage')}}">Groland's Blog</a>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li>*/
/*                         <a href="{{path('blog_AddPost')}}">Ajouter un article</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">Ajouter un administrateur</a>*/
/*                     </li>*/
/*                     <!--<li>*/
/*                         <a href="#">Contact</a>*/
/*                     </li>-->*/
/*                 </ul>*/
/* */
/*                 <ul class="nav navbar-nav navbar-right">*/
/* */
/* */
/* 							{% if is_granted("IS_AUTHENTICATED_FULLY") %}*/
/*                                 <li><a href="#">%PSEUDO%</a></li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('fos_user_security_logout') }}">Deconnection</a>*/
/*                                 </li>*/
/*                             {% else %}*/
/*                                 <li><a href="{{path('fos_user_security_login') }}">Login</a></li>*/
/*                                 <li><a href="{{path('fos_user_registration_register') }}">Register</a></li>*/
/*                             {% endif %}*/
/* 							*/
/* 							<!--<li class="dropdown">*/
/* 								 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<strong class="caret"></strong></a>*/
/* 								<ul class="dropdown-menu">*/
/* 									<li>*/
/* 										<a href="{{ path('fos_user_security_logout') }}">Deconnection</a>*/
/* 									</li>*/
/* 									<li>*/
/* 										<a href="#">Another action</a>*/
/* 									</li>*/
/* 									<li>*/
/* 										<a href="#">Something else here</a>*/
/* 									</li>*/
/* 								</ul>*/
/* 							</li>-->*/
/* 						</ul>*/
/*             </div>*/
/* */
/* */
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav>*/
/* */
/*     {% block corps %}{% endblock %}*/
/* */
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>*/
/*     <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>*/
/* </body>*/
/* </html>*/
