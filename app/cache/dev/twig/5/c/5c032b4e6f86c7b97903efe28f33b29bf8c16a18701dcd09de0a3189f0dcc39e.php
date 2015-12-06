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
        $__internal_5a18c3d2aa2800dda9316a06fd104a9f71c2ccd3b54af9c426cfc73851bd282c = $this->env->getExtension("native_profiler");
        $__internal_5a18c3d2aa2800dda9316a06fd104a9f71c2ccd3b54af9c426cfc73851bd282c->enter($__internal_5a18c3d2aa2800dda9316a06fd104a9f71c2ccd3b54af9c426cfc73851bd282c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"full\" lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Le blog de Groland - ";
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
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/BlogBundle/css/jquery.datetimepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--<link href=\"http://176.149.93.213/jquery.datetimepicker.css\" rel=\"stylesheet\">-->
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
        // line 45
        echo $this->env->getExtension('routing')->getPath("blog_homepage");
        echo "\">Le blog de Groland</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                ";
        // line 49
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 50
            echo "                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("admin_AddPost");
            echo "\">Ajouter un article</a>
                    </li>
                    ";
            // line 54
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 55
                echo "                    <li>
                        <a href=\"";
                // line 56
                echo $this->env->getExtension('routing')->getPath("admin_AddAdmin");
                echo "\">Ajouter un administrateur</a>
                    </li>
                    ";
            }
            // line 59
            echo "                    <!--<li>
                        <a href=\"#\">Contact</a>
                    </li>-->
                </ul>
                ";
        }
        // line 64
        echo "                <ul class=\"nav navbar-nav navbar-right\">


\t\t\t\t\t\t\t";
        // line 67
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 68
            echo "                                <li><a href=\"#\" class=\"inactiveLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                                <li>
                                    <a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                                </li>
                            ";
        } else {
            // line 73
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
                                <li><a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Inscription</a></li>
                            ";
        }
        // line 76
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--<li class=\"dropdown\">
\t\t\t\t\t\t\t\t <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Menu<strong class=\"caret\"></strong></a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 81
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
        // line 101
        $this->displayBlock('corps', $context, $blocks);
        // line 102
        echo "
    <!-- footer -->
    

    <!-- Footer -->
    <footer>
       
        <!-- /.row -->
    </footer>
</body>
</html>";
        
        $__internal_5a18c3d2aa2800dda9316a06fd104a9f71c2ccd3b54af9c426cfc73851bd282c->leave($__internal_5a18c3d2aa2800dda9316a06fd104a9f71c2ccd3b54af9c426cfc73851bd282c_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb5b3b6f8e951a4b74d417eb3f02d0e5250fde4742b95696b2fec2f2a75df5d9 = $this->env->getExtension("native_profiler");
        $__internal_bb5b3b6f8e951a4b74d417eb3f02d0e5250fde4742b95696b2fec2f2a75df5d9->enter($__internal_bb5b3b6f8e951a4b74d417eb3f02d0e5250fde4742b95696b2fec2f2a75df5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bb5b3b6f8e951a4b74d417eb3f02d0e5250fde4742b95696b2fec2f2a75df5d9->leave($__internal_bb5b3b6f8e951a4b74d417eb3f02d0e5250fde4742b95696b2fec2f2a75df5d9_prof);

    }

    // line 101
    public function block_corps($context, array $blocks = array())
    {
        $__internal_eb1c5dbfe875f05b38a6339a9b7a1f17ab37a8e369a6556641e89a11df052ea8 = $this->env->getExtension("native_profiler");
        $__internal_eb1c5dbfe875f05b38a6339a9b7a1f17ab37a8e369a6556641e89a11df052ea8->enter($__internal_eb1c5dbfe875f05b38a6339a9b7a1f17ab37a8e369a6556641e89a11df052ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        
        $__internal_eb1c5dbfe875f05b38a6339a9b7a1f17ab37a8e369a6556641e89a11df052ea8->leave($__internal_eb1c5dbfe875f05b38a6339a9b7a1f17ab37a8e369a6556641e89a11df052ea8_prof);

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
        return array (  207 => 101,  196 => 12,  179 => 102,  177 => 101,  154 => 81,  147 => 76,  142 => 74,  137 => 73,  131 => 70,  125 => 68,  123 => 67,  118 => 64,  111 => 59,  105 => 56,  102 => 55,  100 => 54,  95 => 52,  91 => 50,  89 => 49,  82 => 45,  52 => 18,  48 => 17,  43 => 15,  37 => 12,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html class="full" lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>Le blog de Groland - {% block title %}{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="{{asset('bundles/BlogBundle/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <!-- Custom CSS --> */
/*     <link href="{{asset('bundles/BlogBundle/css/blog-home.css') }}" rel="stylesheet">*/
/*     <link href="{{asset('bundles/BlogBundle/css/jquery.datetimepicker.css') }}" rel="stylesheet">*/
/*     <!--<link href="http://176.149.93.213/jquery.datetimepicker.css" rel="stylesheet">-->*/
/*     <link href="http://getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>*/
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
/*                 {% if is_granted("ROLE_ADMIN") %}*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li>*/
/*                         <a href="{{path('admin_AddPost')}}">Ajouter un article</a>*/
/*                     </li>*/
/*                     {% if is_granted("ROLE_SUPER_ADMIN") %}*/
/*                     <li>*/
/*                         <a href="{{path('admin_AddAdmin')}}">Ajouter un administrateur</a>*/
/*                     </li>*/
/*                     {% endif %}*/
/*                     <!--<li>*/
/*                         <a href="#">Contact</a>*/
/*                     </li>-->*/
/*                 </ul>*/
/*                 {% endif %}*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/* */
/* */
/* 							{% if is_granted("IS_AUTHENTICATED_FULLY") %}*/
/*                                 <li><a href="#" class="inactiveLink">{{app.user.username}}</a></li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
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
/* */
/*     <!-- footer -->*/
/*     */
/* */
/*     <!-- Footer -->*/
/*     <footer>*/
/*        */
/*         <!-- /.row -->*/
/*     </footer>*/
/* </body>*/
/* </html>*/
