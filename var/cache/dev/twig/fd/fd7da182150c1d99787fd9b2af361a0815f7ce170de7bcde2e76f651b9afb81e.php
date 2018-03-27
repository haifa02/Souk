<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_6b78197bad7a98b74146672501aab43406486cb35ca5cee7922dba408a0119f2 extends Twig_Template
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
        $__internal_7f883bb3a3210a81d3fadd05cfc70514e1cdffd1538ac274dab164a0d94c8b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f883bb3a3210a81d3fadd05cfc70514e1cdffd1538ac274dab164a0d94c8b8e->enter($__internal_7f883bb3a3210a81d3fadd05cfc70514e1cdffd1538ac274dab164a0d94c8b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_fb529fba341d15d3ba319b4eeeac73edfb32e69a04f80cb0b017c653cbfd70c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb529fba341d15d3ba319b4eeeac73edfb32e69a04f80cb0b017c653cbfd70c3->enter($__internal_fb529fba341d15d3ba319b4eeeac73edfb32e69a04f80cb0b017c653cbfd70c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
    <title>Luxury Furnish an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Register :: w3layouts</title>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Theme files -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--webfont-->
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
                <a href=\"index.html\"><h6>Online Furnish</h6><h2>Luxury</h2></a>
            </div>
            <div class=\"header_right\">
                <ul class=\"social\">
                    <li><a href=\"\"> <i class=\"fb\"> </i> </a></li>
                    <li><a href=\"\"><i class=\"tw\"> </i> </a></li>
                    <li><a href=\"\"><i class=\"utube\"> </i> </a></li>
                    <li><a href=\"\"><i class=\"pin\"> </i> </a></li>
                    <li><a href=\"\"><i class=\"instagram\"> </i> </a></li>
                </ul>
                <div class=\"lang_list\">
                    <select tabindex=\"4\" class=\"dropdown\">
                        <option value=\"\" class=\"label\" value=\"\">En</option>
                        <option value=\"1\">English</option>
                        <option value=\"2\">French</option>
                        <option value=\"3\">German</option>
                    </select>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"about_box\">
            <ul class=\"login\">
                <li class=\"login_text\"><a href=\"login.html\">Login</a></li>
                <li class=\"wish\"><a href=\"checkout.html\">Wish List</a></li>
                <div class='clearfix'></div>
            </ul>
            <ul class=\"quick_access\">
                <li class=\"view_cart\"><a href=\"checkout.html\">View Cart</a></li>
                <li class=\"check\"><a href=\"checkout.html\">Checkout</a></li>
                <div class='clearfix'></div>
            </ul>
            <div class=\"search\">
                <input type=\"text\" value=\"Search\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Search';}\">
                <input type=\"submit\" value=\"\">
            </div>
        </div>
    </div>
</div>
<div class=\"main\">
    <div class=\"container\">
        <div class=\"register\">
            ";
        // line 86
        $this->displayBlock('formulaire', $context, $blocks);
        // line 88
        echo "        </div>
    </div>
</div>
<div class=\"container\">
    <div class=\"brands\">
        <ul class=\"brand_icons\">
            <li><img src='";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon1.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
            <li><img src='";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon2.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
            <li><img src='";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon3.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
            <li><img src='";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon4.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
            <li class=\"last\"><img src='";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon5.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
        </ul>
    </div>
</div>
<div class=\"container\">
    <div class=\"instagram_top\">
        <div class=\"instagram text-center\">
            <h3>Our Collections</h3>
        </div>
        <ul class=\"instagram_grid\">
            <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"alt=\"\"/></a></li>
            <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
            <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
            <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
            <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
            <li class=\"last_instagram\"><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
            <div class=\"clearfix\"></div>
            <div id=\"small-dialog1\" class=\"mfp-hide\">
                <div class=\"pop_up\">
                    <h4>A Sample Photo Stream</h4>
                    <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i_zoom.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                </div>
            </div>
        </ul>
    </div>
    <ul class=\"footer_social\">
        <li><a href=\"#\"><i class=\"tw\"> </i> </a></li>
        <li><a href=\"#\"> <i class=\"fb\"> </i> </a></li>
        <li><a href=\"#\"><i class=\"pin\"> </i> </a></li>
        <div class=\"clearfix\"></div>
    </ul>
</div>
</div>
<div class=\"footer\">
    <div class=\"container\">
        <div class=\"footer-grid\">
            <h3>Category</h3>
            <ul class=\"list1\">
                <li><a href=\"index.html\">Home</a></li>
                <li><a href=\"about.html\">About us</a></li>
                <li><a href=\"about.html\">Eshop</a></li>
                <li><a href=\"about.html\">Features</a></li>
                <li><a href=\"about.html\">New Collections</a></li>
                <li><a href=\"typo.html\">Typo</a></li>
                <li><a href=\"contact.html\">Contact</a></li>
            </ul>
        </div>
        <div class=\"footer-grid\">
            <h3>Our Account</h3>
            <ul class=\"list1\">
                <li><a href=\"login.html\">Your Account</a></li>
                <li><a href=\"contact.html\">Personal information</a></li>
                <li><a href=\"contact.html\">Addresses</a></li>
                <li><a href=\"#\">Discount</a></li>
                <li><a href=\"checkout.html\">Orders history</a></li>
                <li><a href=\"about.html\">Search Terms</a></li>
            </ul>
        </div>
        <div class=\"footer-grid\">
            <h3>Our Support</h3>
            <ul class=\"list1\">
                <li><a href=\"contact.html\">Site Map</a></li>
                <li><a href=\"about.html\">Search Terms</a></li>
                <li><a href=\"about.html\">Advanced Search</a></li>
                <li><a href=\"about.html\">Mobile</a></li>
                <li><a href=\"contact.html\">Contact Us</a></li>
                <li><a href=\"contact.html\">Mobile</a></li>
                <li><a href=\"contact.html\">Addresses</a></li>
            </ul>
        </div>
        <div class=\"footer-grid\">
            <h3>Newsletter</h3>
            <p class=\"footer_desc\">Nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
            <div class=\"search_footer\">
                <input type=\"text\" class=\"text\" value=\"Your Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Your Email';}\">
                <input type=\"submit\" value=\"Submit\">
            </div>
            <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/payment.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
        </div>
        <div class=\"clearfix\"> </div>
    </div>
</div>
<div class=\"footer_bottom\">
    <div class=\"container\">
        <div class=\"copy\">
            <p>Copyright &copy; 2015 Luxury Furnish. All Rights Reserved . Design by <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> </p>
        </div>
    </div>
</div>
</body>
</html>\t\t";
        
        $__internal_7f883bb3a3210a81d3fadd05cfc70514e1cdffd1538ac274dab164a0d94c8b8e->leave($__internal_7f883bb3a3210a81d3fadd05cfc70514e1cdffd1538ac274dab164a0d94c8b8e_prof);

        
        $__internal_fb529fba341d15d3ba319b4eeeac73edfb32e69a04f80cb0b017c653cbfd70c3->leave($__internal_fb529fba341d15d3ba319b4eeeac73edfb32e69a04f80cb0b017c653cbfd70c3_prof);

    }

    // line 86
    public function block_formulaire($context, array $blocks = array())
    {
        $__internal_e627e7ea46e724eb5423ae5416cbe634c7c824bcc9f23537c567a823c164c89d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e627e7ea46e724eb5423ae5416cbe634c7c824bcc9f23537c567a823c164c89d->enter($__internal_e627e7ea46e724eb5423ae5416cbe634c7c824bcc9f23537c567a823c164c89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        $__internal_6534c53f7bcd689c0a5d239d14b5ff8c41741850fe5eb66abaf75cc71437f879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6534c53f7bcd689c0a5d239d14b5ff8c41741850fe5eb66abaf75cc71437f879->enter($__internal_6534c53f7bcd689c0a5d239d14b5ff8c41741850fe5eb66abaf75cc71437f879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulaire"));

        // line 87
        echo "            ";
        
        $__internal_6534c53f7bcd689c0a5d239d14b5ff8c41741850fe5eb66abaf75cc71437f879->leave($__internal_6534c53f7bcd689c0a5d239d14b5ff8c41741850fe5eb66abaf75cc71437f879_prof);

        
        $__internal_e627e7ea46e724eb5423ae5416cbe634c7c824bcc9f23537c567a823c164c89d->leave($__internal_e627e7ea46e724eb5423ae5416cbe634c7c824bcc9f23537c567a823c164c89d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 87,  282 => 86,  258 => 175,  198 => 118,  190 => 113,  186 => 112,  182 => 111,  178 => 110,  174 => 109,  170 => 108,  157 => 98,  153 => 97,  149 => 96,  145 => 95,  141 => 94,  133 => 88,  131 => 86,  63 => 21,  59 => 20,  54 => 18,  47 => 14,  42 => 12,  37 => 10,  26 => 1,);
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
    <title>Luxury Furnish an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Register :: w3layouts</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Luxury Furnish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href=\"{{ asset('bundles/front/css/bootstrap.css') }}\" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"{{ asset('bundles/front/js/jquery.min.js') }}\"></script>
    <!-- Custom Theme files -->
    <link href=\"{{ asset('bundles/front/css/style.css') }}\" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--webfont-->
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
                <a href=\"index.html\"><h6>Online Furnish</h6><h2>Luxury</h2></a>
            </div>
            <div class=\"header_right\">
                <ul class=\"social\">
                    <li><a href=\"\"> <i class=\"fb\"> </i> </a></li>
                    <li><a href=\"\"><i class=\"tw\"> </i> </a></li>
                    <li><a href=\"\"><i class=\"utube\"> </i> </a></li>
                    <li><a href=\"\"><i class=\"pin\"> </i> </a></li>
                    <li><a href=\"\"><i class=\"instagram\"> </i> </a></li>
                </ul>
                <div class=\"lang_list\">
                    <select tabindex=\"4\" class=\"dropdown\">
                        <option value=\"\" class=\"label\" value=\"\">En</option>
                        <option value=\"1\">English</option>
                        <option value=\"2\">French</option>
                        <option value=\"3\">German</option>
                    </select>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"about_box\">
            <ul class=\"login\">
                <li class=\"login_text\"><a href=\"login.html\">Login</a></li>
                <li class=\"wish\"><a href=\"checkout.html\">Wish List</a></li>
                <div class='clearfix'></div>
            </ul>
            <ul class=\"quick_access\">
                <li class=\"view_cart\"><a href=\"checkout.html\">View Cart</a></li>
                <li class=\"check\"><a href=\"checkout.html\">Checkout</a></li>
                <div class='clearfix'></div>
            </ul>
            <div class=\"search\">
                <input type=\"text\" value=\"Search\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Search';}\">
                <input type=\"submit\" value=\"\">
            </div>
        </div>
    </div>
</div>
<div class=\"main\">
    <div class=\"container\">
        <div class=\"register\">
            {% block formulaire %}
            {% endblock formulaire %}
        </div>
    </div>
</div>
<div class=\"container\">
    <div class=\"brands\">
        <ul class=\"brand_icons\">
            <li><img src='{{ asset('bundles/front/images/icon1.png') }}' class=\"img-responsive\" alt=\"\"/></li>
            <li><img src='{{ asset('bundles/front/images/icon2.png') }}' class=\"img-responsive\" alt=\"\"/></li>
            <li><img src='{{ asset('bundles/front/images/icon3.png') }}' class=\"img-responsive\" alt=\"\"/></li>
            <li><img src='{{ asset('bundles/front/images/icon4.png') }}' class=\"img-responsive\" alt=\"\"/></li>
            <li class=\"last\"><img src='{{ asset('bundles/front/images/icon5.png') }}' class=\"img-responsive\" alt=\"\"/></li>
        </ul>
    </div>
</div>
<div class=\"container\">
    <div class=\"instagram_top\">
        <div class=\"instagram text-center\">
            <h3>Our Collections</h3>
        </div>
        <ul class=\"instagram_grid\">
            <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"{{ asset('bundles/front/images/i1.jpg') }}\" class=\"img-responsive\"alt=\"\"/></a></li>
            <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"{{ asset('bundles/front/images/i2.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a></li>
            <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"{{ asset('bundles/front/images/i3.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a></li>
            <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"{{ asset('bundles/front/images/i4.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a></li>
            <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"{{ asset('bundles/front/images/i5.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a></li>
            <li class=\"last_instagram\"><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"{{ asset('bundles/front/images/i6.jpg') }}\" class=\"img-responsive\" alt=\"\"/></a></li>
            <div class=\"clearfix\"></div>
            <div id=\"small-dialog1\" class=\"mfp-hide\">
                <div class=\"pop_up\">
                    <h4>A Sample Photo Stream</h4>
                    <img src=\"{{ asset('bundles/front/images/i_zoom.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                </div>
            </div>
        </ul>
    </div>
    <ul class=\"footer_social\">
        <li><a href=\"#\"><i class=\"tw\"> </i> </a></li>
        <li><a href=\"#\"> <i class=\"fb\"> </i> </a></li>
        <li><a href=\"#\"><i class=\"pin\"> </i> </a></li>
        <div class=\"clearfix\"></div>
    </ul>
</div>
</div>
<div class=\"footer\">
    <div class=\"container\">
        <div class=\"footer-grid\">
            <h3>Category</h3>
            <ul class=\"list1\">
                <li><a href=\"index.html\">Home</a></li>
                <li><a href=\"about.html\">About us</a></li>
                <li><a href=\"about.html\">Eshop</a></li>
                <li><a href=\"about.html\">Features</a></li>
                <li><a href=\"about.html\">New Collections</a></li>
                <li><a href=\"typo.html\">Typo</a></li>
                <li><a href=\"contact.html\">Contact</a></li>
            </ul>
        </div>
        <div class=\"footer-grid\">
            <h3>Our Account</h3>
            <ul class=\"list1\">
                <li><a href=\"login.html\">Your Account</a></li>
                <li><a href=\"contact.html\">Personal information</a></li>
                <li><a href=\"contact.html\">Addresses</a></li>
                <li><a href=\"#\">Discount</a></li>
                <li><a href=\"checkout.html\">Orders history</a></li>
                <li><a href=\"about.html\">Search Terms</a></li>
            </ul>
        </div>
        <div class=\"footer-grid\">
            <h3>Our Support</h3>
            <ul class=\"list1\">
                <li><a href=\"contact.html\">Site Map</a></li>
                <li><a href=\"about.html\">Search Terms</a></li>
                <li><a href=\"about.html\">Advanced Search</a></li>
                <li><a href=\"about.html\">Mobile</a></li>
                <li><a href=\"contact.html\">Contact Us</a></li>
                <li><a href=\"contact.html\">Mobile</a></li>
                <li><a href=\"contact.html\">Addresses</a></li>
            </ul>
        </div>
        <div class=\"footer-grid\">
            <h3>Newsletter</h3>
            <p class=\"footer_desc\">Nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
            <div class=\"search_footer\">
                <input type=\"text\" class=\"text\" value=\"Your Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Your Email';}\">
                <input type=\"submit\" value=\"Submit\">
            </div>
            <img src=\"{{ asset('bundles/front/images/payment.png') }}\" class=\"img-responsive\" alt=\"\"/>
        </div>
        <div class=\"clearfix\"> </div>
    </div>
</div>
<div class=\"footer_bottom\">
    <div class=\"container\">
        <div class=\"copy\">
            <p>Copyright &copy; 2015 Luxury Furnish. All Rights Reserved . Design by <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> </p>
        </div>
    </div>
</div>
</body>
</html>\t\t", "@FOSUser/layout.html.twig", "/opt/lampp/htdocs/dev/souk/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
