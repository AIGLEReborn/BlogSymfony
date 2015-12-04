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
        $__internal_c5dee19137a15237b8aeb9727c7e63055ff30db8dc4b374e5dbdebf04d238254 = $this->env->getExtension("native_profiler");
        $__internal_c5dee19137a15237b8aeb9727c7e63055ff30db8dc4b374e5dbdebf04d238254->enter($__internal_c5dee19137a15237b8aeb9727c7e63055ff30db8dc4b374e5dbdebf04d238254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
    <!--<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/BlogBundle/css/jquery.datetimepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">-->
    <link href=\"http://176.149.93.213/jquery.datetimepicker.css\" rel=\"stylesheet\">

    <link href=\"http://getbootstrap.com/examples/dashboard/dashboard.css\" rel=\"stylesheet\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js\"></script>



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
        // line 47
        echo $this->env->getExtension('routing')->getPath("blog_homepage");
        echo "\">Le blog de Groland</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("blog_AddPost");
        echo "\">Ajouter un article</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("blog_addAdmin");
        echo "\">Ajouter un administrateur</a>
                    </li>
                    <!--<li>
                        <a href=\"#\">Contact</a>
                    </li>-->
                </ul>

                <ul class=\"nav navbar-nav navbar-right\">


\t\t\t\t\t\t\t";
        // line 66
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 67
            echo "                                <li><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                                <li>
                                    <a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnection</a>
                                </li>
                            ";
        } else {
            // line 72
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
                                <li><a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Inscription</a></li>
                            ";
        }
        // line 75
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--<li class=\"dropdown\">
\t\t\t\t\t\t\t\t <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Menu<strong class=\"caret\"></strong></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 80
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
    
    <script src=\"http://getbootstrap.com/dist/js/bootstrap.min.js\"></script>
    ";
        // line 100
        $this->displayBlock('corps', $context, $blocks);
        // line 101
        echo "</body>
</html>";
        
        $__internal_c5dee19137a15237b8aeb9727c7e63055ff30db8dc4b374e5dbdebf04d238254->leave($__internal_c5dee19137a15237b8aeb9727c7e63055ff30db8dc4b374e5dbdebf04d238254_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4ab672876a73ba94d3a7054f6dacc993752a199369c5031024691bbacf0a50a = $this->env->getExtension("native_profiler");
        $__internal_f4ab672876a73ba94d3a7054f6dacc993752a199369c5031024691bbacf0a50a->enter($__internal_f4ab672876a73ba94d3a7054f6dacc993752a199369c5031024691bbacf0a50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f4ab672876a73ba94d3a7054f6dacc993752a199369c5031024691bbacf0a50a->leave($__internal_f4ab672876a73ba94d3a7054f6dacc993752a199369c5031024691bbacf0a50a_prof);

    }

    // line 100
    public function block_corps($context, array $blocks = array())
    {
        $__internal_e5828a71492c81ebcb358c193d2c05bd94398750f07f06d609c4b4b1bea5946e = $this->env->getExtension("native_profiler");
        $__internal_e5828a71492c81ebcb358c193d2c05bd94398750f07f06d609c4b4b1bea5946e->enter($__internal_e5828a71492c81ebcb358c193d2c05bd94398750f07f06d609c4b4b1bea5946e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        
        $__internal_e5828a71492c81ebcb358c193d2c05bd94398750f07f06d609c4b4b1bea5946e->leave($__internal_e5828a71492c81ebcb358c193d2c05bd94398750f07f06d609c4b4b1bea5946e_prof);

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
        return array (  184 => 100,  173 => 12,  165 => 101,  163 => 100,  140 => 80,  133 => 75,  128 => 73,  123 => 72,  117 => 69,  111 => 67,  109 => 66,  96 => 56,  90 => 53,  81 => 47,  48 => 17,  43 => 15,  37 => 12,  24 => 1,);
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
/*     <!-- Custom CSS --> */
/*     <!--<link href="{{asset('bundles/BlogBundle/css/jquery.datetimepicker.css') }}" rel="stylesheet">-->*/
/*     <link href="http://176.149.93.213/jquery.datetimepicker.css" rel="stylesheet">*/
/* */
/*     <link href="http://getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>*/
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
/*     */
/*     <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>*/
/*     {% block corps %}{% endblock %}*/
/* </body>*/
/* </html>*/
