<?php

/* BackBundle::panel.html.twig */
class __TwigTemplate_e07f66f16b2d53cc189b7206e66a3722bc4e049f34672d8578a938f9683992ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d32fef1aaf7bdcbac0af286ba0cf23482f5fe6f6df5498be7269af56623b073a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32fef1aaf7bdcbac0af286ba0cf23482f5fe6f6df5498be7269af56623b073a->enter($__internal_d32fef1aaf7bdcbac0af286ba0cf23482f5fe6f6df5498be7269af56623b073a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle::panel.html.twig"));

        $__internal_9ff1f6d912f04dd7648ef8fd0adc28dcf287bcc924999be315da79bd3d623ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff1f6d912f04dd7648ef8fd0adc28dcf287bcc924999be315da79bd3d623ea6->enter($__internal_9ff1f6d912f04dd7648ef8fd0adc28dcf287bcc924999be315da79bd3d623ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle::panel.html.twig"));

        // line 1
        echo "﻿<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <![endif]-->
    <title>Souk ADMIN</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/admin/assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- FONT AWESOME STYLE  -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/admin/assets/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- CUSTOM STYLE  -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/admin/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class=\"navbar navbar-inverse set-radius-zero\" >
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">

                    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/admin/assets/img/logo.png"), "html", null, true);
        echo "\" />
                </a>

            </div>

            <div class=\"right-div\">
                <a href=\"#\" class=\"btn btn-danger pull-right\">LOG ME OUT</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class=\"menu-section\">
        <div class=\"container\">
            <div class=\"row \">
                <div class=\"col-md-12\">
                    <div class=\"navbar-collapse collapse \">
                        <ul id=\"menu-top\" class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"index.html\" class=\"menu-top-active\">DASHBOARD</a></li>
                           
                            <li><a href=\"form.html\">FORMS</a></li>
                            <li>
                                <a href=\"#\" class=\"dropdown-toggle\" id=\"ddlmenuItem\" data-toggle=\"dropdown\">UI ELEMENTS <i class=\"fa fa-angle-down\"></i></a>
                                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"ddlmenuItem\">
                                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"\">UI ELEMENTS</a></li>
                                     <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">EXAMPLE LINK</a></li>
                                </ul>
                            </li>
                            <li><a href=\"\">TABS & PANELS</a></li>
                             <li><a href=\"\">TABLES</a></li>
                            <li><a href=\"\">BLANK PAGE</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class=\"content-wrapper\">
         <div class=\"container\">
        <div class=\"row pad-botm\">
            <div class=\"col-md-12\">
                <h4 class=\"header-line\">ADMIN DASHBOARD</h4>
                
                            </div>

        </div>
             
                      
            <div class=\"row\">

              ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "             
            </div>
            

            
           

    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <section class=\"footer-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                   &copy; 2018 </a> 
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/admin/assets/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/admin/assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/back/admin/assets/js/custom.js"), "html", null, true);
        echo "\"></script>
  
</body>
</html>
";
        
        $__internal_d32fef1aaf7bdcbac0af286ba0cf23482f5fe6f6df5498be7269af56623b073a->leave($__internal_d32fef1aaf7bdcbac0af286ba0cf23482f5fe6f6df5498be7269af56623b073a_prof);

        
        $__internal_9ff1f6d912f04dd7648ef8fd0adc28dcf287bcc924999be315da79bd3d623ea6->leave($__internal_9ff1f6d912f04dd7648ef8fd0adc28dcf287bcc924999be315da79bd3d623ea6_prof);

    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
        $__internal_1662c30aff401ce5820df59758a1b931e6b06ebedfe91f85c4a8cede67bb6586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1662c30aff401ce5820df59758a1b931e6b06ebedfe91f85c4a8cede67bb6586->enter($__internal_1662c30aff401ce5820df59758a1b931e6b06ebedfe91f85c4a8cede67bb6586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a897270330d649bb9378f19dbd9a5db878f5f745b39ee6b1145400efd2bc76a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a897270330d649bb9378f19dbd9a5db878f5f745b39ee6b1145400efd2bc76a->enter($__internal_0a897270330d649bb9378f19dbd9a5db878f5f745b39ee6b1145400efd2bc76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 86
        echo "              ";
        
        $__internal_0a897270330d649bb9378f19dbd9a5db878f5f745b39ee6b1145400efd2bc76a->leave($__internal_0a897270330d649bb9378f19dbd9a5db878f5f745b39ee6b1145400efd2bc76a_prof);

        
        $__internal_1662c30aff401ce5820df59758a1b931e6b06ebedfe91f85c4a8cede67bb6586->leave($__internal_1662c30aff401ce5820df59758a1b931e6b06ebedfe91f85c4a8cede67bb6586_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle::panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 86,  176 => 85,  161 => 114,  156 => 112,  151 => 110,  126 => 87,  124 => 85,  69 => 33,  50 => 17,  45 => 15,  40 => 13,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("﻿<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <![endif]-->
    <title>Souk ADMIN</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href=\"{{asset('bundles/back/admin/assets/css/bootstrap.css')}}\" rel=\"stylesheet\" />
    <!-- FONT AWESOME STYLE  -->
    <link href=\"{{asset('bundles/back/admin/assets/css/font-awesome.css')}}\" rel=\"stylesheet\" />
    <!-- CUSTOM STYLE  -->
    <link href=\"{{asset('bundles/back/admin/assets/css/style.css')}}\" rel=\"stylesheet\" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class=\"navbar navbar-inverse set-radius-zero\" >
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">

                    <img src=\"{{asset('bundles/back/admin/assets/img/logo.png')}}\" />
                </a>

            </div>

            <div class=\"right-div\">
                <a href=\"#\" class=\"btn btn-danger pull-right\">LOG ME OUT</a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class=\"menu-section\">
        <div class=\"container\">
            <div class=\"row \">
                <div class=\"col-md-12\">
                    <div class=\"navbar-collapse collapse \">
                        <ul id=\"menu-top\" class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"index.html\" class=\"menu-top-active\">DASHBOARD</a></li>
                           
                            <li><a href=\"form.html\">FORMS</a></li>
                            <li>
                                <a href=\"#\" class=\"dropdown-toggle\" id=\"ddlmenuItem\" data-toggle=\"dropdown\">UI ELEMENTS <i class=\"fa fa-angle-down\"></i></a>
                                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"ddlmenuItem\">
                                    <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"\">UI ELEMENTS</a></li>
                                     <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">EXAMPLE LINK</a></li>
                                </ul>
                            </li>
                            <li><a href=\"\">TABS & PANELS</a></li>
                             <li><a href=\"\">TABLES</a></li>
                            <li><a href=\"\">BLANK PAGE</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class=\"content-wrapper\">
         <div class=\"container\">
        <div class=\"row pad-botm\">
            <div class=\"col-md-12\">
                <h4 class=\"header-line\">ADMIN DASHBOARD</h4>
                
                            </div>

        </div>
             
                      
            <div class=\"row\">

              {% block body %}
              {% endblock body %}
             
            </div>
            

            
           

    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <section class=\"footer-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                   &copy; 2018 </a> 
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src=\"{{asset('bundles/back/admin/assets/js/jquery-1.10.2.js')}}\"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src=\"{{asset('bundles/back/admin/assets/js/bootstrap.js')}}\"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src=\"{{asset('bundles/back/admin/assets/js/custom.js')}}\"></script>
  
</body>
</html>
", "BackBundle::panel.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/BackBundle/Resources/views/panel.html.twig");
    }
}
