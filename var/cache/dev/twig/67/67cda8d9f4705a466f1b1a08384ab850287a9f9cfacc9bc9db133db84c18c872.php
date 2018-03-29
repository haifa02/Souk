<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_c4c0218b897dfed4d8b3dbcd4c82b8a444c25fbab07c7c58dd24fcb108a46b23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'formulaire' => array($this, 'block_formulaire'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2c1fd2251856ca2b4360a3a6fdefc81edcbd72b7151755518107e346c29681a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c1fd2251856ca2b4360a3a6fdefc81edcbd72b7151755518107e346c29681a->enter($__internal_b2c1fd2251856ca2b4360a3a6fdefc81edcbd72b7151755518107e346c29681a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $__internal_75d05c692202d60ee9a6e86a5b5155185fea70de93d200ce39ed5126f503f9cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d05c692202d60ee9a6e86a5b5155185fea70de93d200ce39ed5126f503f9cf->enter($__internal_75d05c692202d60ee9a6e86a5b5155185fea70de93d200ce39ed5126f503f9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
    <title>Souk ElMedina</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Luxury Furnish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/bootstrap.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/simpleCart.min.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Theme files -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--//webfont-->
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/jquery.easydropdown.js"), "html", null, true);
        echo "\"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/jquery.magnific-popup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">


    <script>
        \$(document).ready(function() {
            \$('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
        });
    </script>
</head>
<body>
<div class=\"header\">
    <div class=\"container\">
        <div class=\"header-top\">
            <div class=\"logo\">
                <a href=\"\"><h6>Souk El Medina</h6></a>
            </div>
            <div class=\"header_right\">
                <div>
                    ";
        // line 49
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 50
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 55
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 57
        echo "                </div>
                <div class=\"lang_list\">

                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"banner_wrap\">
            <div class=\"bannertop_box\">


            </div>
            <div class=\"banner_right\">
                <h1>Welcome to Souk ElMedina <br></h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                <a href=\"#\" class=\"banner_btn\">Buy Now</a>
            </div>
            <div class='clearfix'></div>
        </div>
    </div>
</div>
<div class=\"main\">
    <div class=\"content_box\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2\">

                </div>

                <div class=\"col-md-10 box-form\">
                    ";
        // line 88
        $this->displayBlock('formulaire', $context, $blocks);
        // line 90
        echo "                </div>

            </div>
        </div>
    </div>

</div>
<div class=\"footer\">

</div>
<div class=\"footer_bottom\">
    <div class=\"container\">
        <div class=\"copy\">
            <p>Copyright &copy; 2018 </p>
        </div>
    </div>
</div>
</body>
</html>
";
        
        $__internal_b2c1fd2251856ca2b4360a3a6fdefc81edcbd72b7151755518107e346c29681a->leave($__internal_b2c1fd2251856ca2b4360a3a6fdefc81edcbd72b7151755518107e346c29681a_prof);

        
        $__internal_75d05c692202d60ee9a6e86a5b5155185fea70de93d200ce39ed5126f503f9cf->leave($__internal_75d05c692202d60ee9a6e86a5b5155185fea70de93d200ce39ed5126f503f9cf_prof);

    }

    // line 88
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_fb6b3b053eaa22ce9bbc260affaad1008dd16f23dc9cb715bed480be87000a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6b3b053eaa22ce9bbc260affaad1008dd16f23dc9cb715bed480be87000a7c->enter($__internal_fb6b3b053eaa22ce9bbc260affaad1008dd16f23dc9cb715bed480be87000a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_5515b76f0e46dc39806d7f42dabf5538a1a961a23a3b9e3bc4c364d42419e043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5515b76f0e46dc39806d7f42dabf5538a1a961a23a3b9e3bc4c364d42419e043->enter($__internal_5515b76f0e46dc39806d7f42dabf5538a1a961a23a3b9e3bc4c364d42419e043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 89
        echo "                    ";
        
        $__internal_5515b76f0e46dc39806d7f42dabf5538a1a961a23a3b9e3bc4c364d42419e043->leave($__internal_5515b76f0e46dc39806d7f42dabf5538a1a961a23a3b9e3bc4c364d42419e043_prof);

        
        $__internal_fb6b3b053eaa22ce9bbc260affaad1008dd16f23dc9cb715bed480be87000a7c->leave($__internal_fb6b3b053eaa22ce9bbc260affaad1008dd16f23dc9cb715bed480be87000a7c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 89,  186 => 88,  157 => 90,  155 => 88,  122 => 57,  114 => 55,  108 => 52,  104 => 51,  99 => 50,  97 => 49,  66 => 21,  62 => 20,  57 => 18,  51 => 15,  46 => 13,  42 => 12,  37 => 10,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>
<head>
    <title>Souk ElMedina</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Luxury Furnish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href=\"{{ asset('bundles/front/css/bootstrap.css') }}\" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"{{ asset('bundles/front/js/simpleCart.min.js') }}\"> </script>
    <script src=\"{{ asset('bundles/front/js/jquery.min.js') }}\"></script>
    <!-- Custom Theme files -->
    <link href=\"{{ asset('bundles/front/css/style.css') }}\" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--//webfont-->
    <script src=\"{{ asset('bundles/front/js/jquery.easydropdown.js') }}\"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script src=\"{{ asset('bundles/front/js/jquery.magnific-popup.js') }}\" type=\"text/javascript\"></script>
    <link href=\"{{ asset('bundles/front/css/magnific-popup.css') }}\" rel=\"stylesheet\" type=\"text/css\">


    <script>
        \$(document).ready(function() {
            \$('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
        });
    </script>
</head>
<body>
<div class=\"header\">
    <div class=\"container\">
        <div class=\"header-top\">
            <div class=\"logo\">
                <a href=\"\"><h6>Souk El Medina</h6></a>
            </div>
            <div class=\"header_right\">
                <div>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                        <a href=\"{{ path('fos_user_security_logout') }}\">
                            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                        </a>
                    {% else %}
                        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                    {% endif %}
                </div>
                <div class=\"lang_list\">

                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"banner_wrap\">
            <div class=\"bannertop_box\">


            </div>
            <div class=\"banner_right\">
                <h1>Welcome to Souk ElMedina <br></h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                <a href=\"#\" class=\"banner_btn\">Buy Now</a>
            </div>
            <div class='clearfix'></div>
        </div>
    </div>
</div>
<div class=\"main\">
    <div class=\"content_box\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-2\">

                </div>

                <div class=\"col-md-10 box-form\">
                    {% block formulaire %}
                    {% endblock formulaire %}
                </div>

            </div>
        </div>
    </div>

</div>
<div class=\"footer\">

</div>
<div class=\"footer_bottom\">
    <div class=\"container\">
        <div class=\"copy\">
            <p>Copyright &copy; 2018 </p>
        </div>
    </div>
</div>
</body>
</html>
", "UserBundle::layout.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/layout.html.twig");
    }
}
