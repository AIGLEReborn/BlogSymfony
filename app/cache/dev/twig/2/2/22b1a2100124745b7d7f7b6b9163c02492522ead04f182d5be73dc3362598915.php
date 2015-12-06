<?php

/* BlogBundle:Blog:index.html.twig */
class __TwigTemplate_f4630e709ac187b26172d74282a1dcd2c93fb648fd4224a5b25035e17c8adb5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "BlogBundle:Blog:index.html.twig", 1);
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
        $__internal_975e890f4db0f2d89012d3f54787bc245ea3fe6346f29d3f5496f7f7a31e8af8 = $this->env->getExtension("native_profiler");
        $__internal_975e890f4db0f2d89012d3f54787bc245ea3fe6346f29d3f5496f7f7a31e8af8->enter($__internal_975e890f4db0f2d89012d3f54787bc245ea3fe6346f29d3f5496f7f7a31e8af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_975e890f4db0f2d89012d3f54787bc245ea3fe6346f29d3f5496f7f7a31e8af8->leave($__internal_975e890f4db0f2d89012d3f54787bc245ea3fe6346f29d3f5496f7f7a31e8af8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_53454636984592d5f6b1e101942e687009f5234432ed5ccd08be28117cebe37b = $this->env->getExtension("native_profiler");
        $__internal_53454636984592d5f6b1e101942e687009f5234432ed5ccd08be28117cebe37b->enter($__internal_53454636984592d5f6b1e101942e687009f5234432ed5ccd08be28117cebe37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil ";
        
        $__internal_53454636984592d5f6b1e101942e687009f5234432ed5ccd08be28117cebe37b->leave($__internal_53454636984592d5f6b1e101942e687009f5234432ed5ccd08be28117cebe37b_prof);

    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        $__internal_510bcdb6e398982c547688cc59117b66a941faeff0b14b464d19af4f576e47eb = $this->env->getExtension("native_profiler");
        $__internal_510bcdb6e398982c547688cc59117b66a941faeff0b14b464d19af4f576e47eb->enter($__internal_510bcdb6e398982c547688cc59117b66a941faeff0b14b464d19af4f576e47eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 6
        echo "<section>
<div class=\"container\">

    <div class=\"row\">
        <div class=\"col-md-12\" >
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 12
            echo "            <article>
                <div class = \"panel panel-default\" style=\"margin-top: 10px;\">
                    <div class = \"panel-heading\">
                        <h2>
                            ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
            echo "<small>, écrit par ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "author", array()), "username", array()), "html", null, true);
            echo "</small>
                        </h2>
                        <br />
                        ";
            // line 19
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 20
                echo "                        <div class=\"pull-right\">

                            <div class=\"btn\"><a href=";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_EditPost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "><img src=\"https://cdn4.iconfinder.com/data/icons/32x32-free-design-icons/32/Pencil.png\" height=\"10\" width=\"10\"/></a></div> - <div class=\"btn\"><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_DeletePost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "><img src=\"http://www.andorrasportstraining.com/resources/images/Dialog-close.png\" height=\"10\" width=\"10\"/></a></div>
                        </div>
                        ";
            }
            // line 25
            echo "
                        <p><span class=\"glyphicon glyphicon-time\"></span> Ecrit le ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "datePublication", array()), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "datePublication", array()), "H:i:s"), "html", null, true);
            echo "</p>
                    </div>
                    <div class = \"panel-body\">

                        ";
            // line 31
            echo "
                        <p> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["countComms"]) ? $context["countComms"] : $this->getContext($context, "countComms")), $this->getAttribute($context["post"], "id", array()), array(), "array"), "html", null, true);
            echo " commentaires <br> <br>
                            <a class=\"btn btn-primary\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_afficheOnePost", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">Lire et commenter <span class=\"glyphicon glyphicon-chevron-right\"></span></a> <br>  </p>
                    </div>
                </div>
            </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "   
        </div>
    </div>

        ";
        // line 41
        if ((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) {
            // line 42
            echo "        <ul class=\"pagination\">
            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 44
                echo "
            <li><a href=";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_pageX", array("value" => $context["i"])), "html", null, true);
                echo " > ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " </a> </li>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        </ul>
        ";
        }
        // line 50
        echo "</div>
</section>
";
        
        $__internal_510bcdb6e398982c547688cc59117b66a941faeff0b14b464d19af4f576e47eb->leave($__internal_510bcdb6e398982c547688cc59117b66a941faeff0b14b464d19af4f576e47eb_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 50,  151 => 48,  140 => 45,  137 => 44,  133 => 43,  130 => 42,  128 => 41,  122 => 37,  111 => 33,  107 => 32,  104 => 31,  95 => 26,  92 => 25,  84 => 22,  80 => 20,  78 => 19,  70 => 16,  64 => 12,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %} Accueil {% endblock %}*/
/* */
/* {% block corps %}*/
/* <section>*/
/* <div class="container">*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12" >*/
/*             {% for post in posts %}*/
/*             <article>*/
/*                 <div class = "panel panel-default" style="margin-top: 10px;">*/
/*                     <div class = "panel-heading">*/
/*                         <h2>*/
/*                             {{ post.titre }}<small>, écrit par {{ post.author.username }}</small>*/
/*                         </h2>*/
/*                         <br />*/
/*                         {% if is_granted("ROLE_ADMIN") %}*/
/*                         <div class="pull-right">*/
/* */
/*                             <div class="btn"><a href={{path('admin_EditPost', {'id' : post.id})}}><img src="https://cdn4.iconfinder.com/data/icons/32x32-free-design-icons/32/Pencil.png" height="10" width="10"/></a></div> - <div class="btn"><a href={{path('admin_DeletePost', {'id' : post.id})}}><img src="http://www.andorrasportstraining.com/resources/images/Dialog-close.png" height="10" width="10"/></a></div>*/
/*                         </div>*/
/*                         {% endif %}*/
/* */
/*                         <p><span class="glyphicon glyphicon-time"></span> Ecrit le {{post.datePublication|date("d/m/Y")}} à {{post.datePublication|date("H:i:s")}}</p>*/
/*                     </div>*/
/*                     <div class = "panel-body">*/
/* */
/*                         {# {{ count }} commentaires #}*/
/* */
/*                         <p> {{ countComms[post.id] }} commentaires <br> <br>*/
/*                             <a class="btn btn-primary" href="{{path('blog_afficheOnePost', {'id' : post.id})}}">Lire et commenter <span class="glyphicon glyphicon-chevron-right"></span></a> <br>  </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </article>*/
/*             {% endfor %}   */
/*         </div>*/
/*     </div>*/
/* */
/*         {% if pagination %}*/
/*         <ul class="pagination">*/
/*             {% for i in 1..count %}*/
/* */
/*             <li><a href={{path('blog_pageX', {'value' : i }) }} > {{ i }} </a> </li>*/
/* */
/*             {% endfor %}*/
/*         </ul>*/
/*         {% endif %}*/
/* </div>*/
/* </section>*/
/* {% endblock %}*/
