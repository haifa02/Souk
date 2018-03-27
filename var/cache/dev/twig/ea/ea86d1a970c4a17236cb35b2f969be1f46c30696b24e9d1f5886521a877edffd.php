<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_6b977d72c91f68b0357df22e38fc9a56c6adef025212cd7ec834bd88225df94f extends Twig_Template
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
        $__internal_f03d1f1e8b38ca681d3a4d42f0ba3cb40c8c7a5e0adaf97851ec96de5c1437aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03d1f1e8b38ca681d3a4d42f0ba3cb40c8c7a5e0adaf97851ec96de5c1437aa->enter($__internal_f03d1f1e8b38ca681d3a4d42f0ba3cb40c8c7a5e0adaf97851ec96de5c1437aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $__internal_9392c0852d6d0e268b3ba3399ea45cff8bf842aef0c60ba0de992e7583d0cac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9392c0852d6d0e268b3ba3399ea45cff8bf842aef0c60ba0de992e7583d0cac2->enter($__internal_9392c0852d6d0e268b3ba3399ea45cff8bf842aef0c60ba0de992e7583d0cac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

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
                <div class=\"col-md-4\">

                </div>

                <div class=\"col-md-8\">
                    ";
        // line 77
        $this->displayBlock('formulaire', $context, $blocks);
        // line 79
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
        
        $__internal_f03d1f1e8b38ca681d3a4d42f0ba3cb40c8c7a5e0adaf97851ec96de5c1437aa->leave($__internal_f03d1f1e8b38ca681d3a4d42f0ba3cb40c8c7a5e0adaf97851ec96de5c1437aa_prof);

        
        $__internal_9392c0852d6d0e268b3ba3399ea45cff8bf842aef0c60ba0de992e7583d0cac2->leave($__internal_9392c0852d6d0e268b3ba3399ea45cff8bf842aef0c60ba0de992e7583d0cac2_prof);

    }

    // line 77
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_ef71eda97b920d8ad2c61364067142392220120653d77b9c3c25236a627cd686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef71eda97b920d8ad2c61364067142392220120653d77b9c3c25236a627cd686->enter($__internal_ef71eda97b920d8ad2c61364067142392220120653d77b9c3c25236a627cd686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_b934e1c372a6a8f95e1f6a6dd8c83fa00711fbcbc6ba3446ececf3b36ad7d7de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b934e1c372a6a8f95e1f6a6dd8c83fa00711fbcbc6ba3446ececf3b36ad7d7de->enter($__internal_b934e1c372a6a8f95e1f6a6dd8c83fa00711fbcbc6ba3446ececf3b36ad7d7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 78
        echo "                    ";
        
        $__internal_b934e1c372a6a8f95e1f6a6dd8c83fa00711fbcbc6ba3446ececf3b36ad7d7de->leave($__internal_b934e1c372a6a8f95e1f6a6dd8c83fa00711fbcbc6ba3446ececf3b36ad7d7de_prof);

        
        $__internal_ef71eda97b920d8ad2c61364067142392220120653d77b9c3c25236a627cd686->leave($__internal_ef71eda97b920d8ad2c61364067142392220120653d77b9c3c25236a627cd686_prof);

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
        return array (  165 => 78,  156 => 77,  127 => 79,  125 => 77,  66 => 21,  62 => 20,  57 => 18,  51 => 15,  46 => 13,  42 => 12,  37 => 10,  26 => 1,);
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
                <div class=\"col-md-4\">

                </div>

                <div class=\"col-md-8\">
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
