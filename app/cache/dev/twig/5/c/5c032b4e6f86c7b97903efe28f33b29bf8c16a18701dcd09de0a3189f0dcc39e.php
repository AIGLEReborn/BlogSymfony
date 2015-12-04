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
        $__internal_9c765721c35d790890b396a7e9a5e69fc13aa6864d50cdf421fb8a0b328c2bc2 = $this->env->getExtension("native_profiler");
        $__internal_9c765721c35d790890b396a7e9a5e69fc13aa6864d50cdf421fb8a0b328c2bc2->enter($__internal_9c765721c35d790890b396a7e9a5e69fc13aa6864d50cdf421fb8a0b328c2bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
    <!-- Pour TimePicker -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"jquery.datetimepicker.css\"/ >
    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/BlogBundle/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"";
        // line 18
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
        // line 46
        echo $this->env->getExtension('routing')->getPath("blog_homepage");
        echo "\">Le blog de Groland</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("blog_AddPost");
        echo "\">Ajouter un article</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("blog_addAdmin");
        echo "\">Ajouter un administrateur</a>
                    </li>
                    <!--<li>
                        <a href=\"#\">Contact</a>
                    </li>-->
                </ul>

                <ul class=\"nav navbar-nav navbar-right\">


\t\t\t\t\t\t\t";
        // line 65
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 66
            echo "                                <li><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                                <li>
                                    <a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnection</a>
                                </li>
                            ";
        } else {
            // line 71
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
                                <li><a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Inscription</a></li>
                            ";
        }
        // line 74
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--<li class=\"dropdown\">
\t\t\t\t\t\t\t\t <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Menu<strong class=\"caret\"></strong></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 79
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
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"http://getbootstrap.com/dist/js/bootstrap.min.js\"></script>
    ";
        // line 99
        $this->displayBlock('corps', $context, $blocks);
        // line 100
        echo "</body>
</html>";
        
        $__internal_9c765721c35d790890b396a7e9a5e69fc13aa6864d50cdf421fb8a0b328c2bc2->leave($__internal_9c765721c35d790890b396a7e9a5e69fc13aa6864d50cdf421fb8a0b328c2bc2_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a92f57c77981ee7692a59faa7bc59bc95f35e7dc34b301dc3bcbc3d64d6ce3d = $this->env->getExtension("native_profiler");
        $__internal_0a92f57c77981ee7692a59faa7bc59bc95f35e7dc34b301dc3bcbc3d64d6ce3d->enter($__internal_0a92f57c77981ee7692a59faa7bc59bc95f35e7dc34b301dc3bcbc3d64d6ce3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0a92f57c77981ee7692a59faa7bc59bc95f35e7dc34b301dc3bcbc3d64d6ce3d->leave($__internal_0a92f57c77981ee7692a59faa7bc59bc95f35e7dc34b301dc3bcbc3d64d6ce3d_prof);

    }

    // line 99
    public function block_corps($context, array $blocks = array())
    {
        $__internal_6152c0362cca115f87e9408145dbc53781f8a779eb03980659261d2a4bd885c4 = $this->env->getExtension("native_profiler");
        $__internal_6152c0362cca115f87e9408145dbc53781f8a779eb03980659261d2a4bd885c4->enter($__internal_6152c0362cca115f87e9408145dbc53781f8a779eb03980659261d2a4bd885c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        
        $__internal_6152c0362cca115f87e9408145dbc53781f8a779eb03980659261d2a4bd885c4->leave($__internal_6152c0362cca115f87e9408145dbc53781f8a779eb03980659261d2a4bd885c4_prof);

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
        return array (  183 => 99,  172 => 12,  164 => 100,  162 => 99,  139 => 79,  132 => 74,  127 => 72,  122 => 71,  116 => 68,  110 => 66,  108 => 65,  95 => 55,  89 => 52,  80 => 46,  49 => 18,  44 => 16,  37 => 12,  24 => 1,);
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
/*     <!-- Pour TimePicker -->*/
/*     <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css"/ >*/
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
/*                 <a class="navbar-brand" href="{{path('blog_homepage')}}">Le blog de Groland</a>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li>*/
/*                         <a href="{{path('blog_AddPost')}}">Ajouter un article</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{path('blog_addAdmin')}}">Ajouter un administrateur</a>*/
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
/*                                 <li><a href="#">{{app.user.username}}</a></li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('fos_user_security_logout') }}">Déconnection</a>*/
/*                                 </li>*/
/*                             {% else %}*/
/*                                 <li><a href="{{path('fos_user_security_login') }}">Connexion</a></li>*/
/*                                 <li><a href="{{path('fos_user_registration_register') }}">Inscription</a></li>*/
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
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>*/
/*     <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>*/
/*     {% block corps %}{% endblock %}*/
/* </body>*/
/* </html>*/
