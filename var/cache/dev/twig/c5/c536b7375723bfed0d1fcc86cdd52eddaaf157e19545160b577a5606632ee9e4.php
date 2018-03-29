<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_f1f873281f3858971b76df1d86912adf9ce438d3ff961f4ff0118f833f8cc9c7 extends Twig_Template
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
        $__internal_9ec1c7250a0b44f6b48de821ea875b9518fd2244be83de15c2554fb99168d448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec1c7250a0b44f6b48de821ea875b9518fd2244be83de15c2554fb99168d448->enter($__internal_9ec1c7250a0b44f6b48de821ea875b9518fd2244be83de15c2554fb99168d448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $__internal_685cbbc41711bdd64f6777ba1413c3436ebb5e137958f5335463f9e76a8baca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685cbbc41711bdd64f6777ba1413c3436ebb5e137958f5335463f9e76a8baca4->enter($__internal_685cbbc41711bdd64f6777ba1413c3436ebb5e137958f5335463f9e76a8baca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
    <title>Luxury Furnish an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Home :: w3layouts</title>
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
    <!--webfont-->
    <!--//webfont-->
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/jquery.easydropdown.js"), "html", null, true);
        echo "\"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/js/jquery.magnific-popup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <link href=\"";
        // line 22
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
        // line 48
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 49
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 54
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 56
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
                <div class=\"col-md-3\">
                    <div class=\"menu_box\">
                        <h3 class=\"menu_head\">Menu</h3>
                        <ul class=\"nav\">
                            <li><a href=\"about.html\">About</a></li>
                            <li><a href=\"about.html\">Living Room</a></li>
                            <li><a href=\"about.html\">Office Furniture</a></li>
                            <li><a href=\"about.html\">Bean Bags</a></li>
                            <li><a href=\"about.html\">Tables</a></li>
                            <li><a href=\"about.html\">Sofas</a></li>
                            <li><a href=\"about.html\">Wardrobes</a></li>
                            <li><a href=\"about.html\">Beds</a></li>
                            <li><a href=\"typo.html\">Typo</a></li>
                            <li><a href=\"about.html\">Chairs</a></li>
                            <li><a href=\"about.html\">Kids Beds</a></li>
                        </ul>
                    </div>
                    <div class=\"side_banner\">
                        <div class=\"banner_img\"><img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic9.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></div>
                        <div class=\"banner_holder\">
                            <h3>Now <br> is <br> Open!</h3>
                        </div>
                    </div>
                    <div class=\"tags\">
                        <h4 class=\"tag_head\">Tags Widget</h4>
                        <ul class=\"tags_links\">
                            <li><a href=\"#\">Office</a></li>
                            <li><a href=\"#\">Chairs</a></li>
                            <li><a href=\"#\">Wood</a></li>
                            <li><a href=\"#\">Metal</a></li>
                            <li><a href=\"#\">Sizes</a></li>
                            <li><a href=\"#\">Women</a></li>
                            <li><a href=\"#\">Wardrobes</a></li>
                            <li><a href=\"#\">Latest</a></li>
                            <li><a href=\"#\">Kitchen</a></li>
                            <li><a href=\"#\">Tables</a></li>
                            <li><a href=\"#\">Modern</a></li>
                            <li><a href=\"#\">Colors</a></li>
                            <li><a href=\"#\">Shelves</a></li>
                            <li><a href=\"#\">Stools</a></li>
                            <li><a href=\"#\">Pouffes</a></li>
                            <li><a href=\"#\">Women</a></li>
                            <li><a href=\"#\">Bedroom</a></li>
                        </ul>
                        <a href=\"#\" class=\"link1\">View all tags</a>
                    </div>
                    <div class=\"tags\">
                        <h4 class=\"tag_head\">Articles Experts</h4>
                        <ul class=\"article_links\">
                            <li><a href=\"#\">Eleifend option congue nihil</a></li>
                            <li><a href=\"#\">Investigationes demonst</a></li>
                            <li><a href=\"#\">Qui sequitur mutationem</a></li>
                            <li><a href=\"#\">videntur parum clar sollemnes</a></li>
                            <li><a href=\"#\">ullamcorper suscipit lobortis</a></li>
                            <li><a href=\"#\">commodo consequat. Duis autem</a></li>
                            <li><a href=\"#\">Investigationes demonst</a></li>
                            <li><a href=\"#\">ullamcorper suscipit lobortis</a></li>
                            <li><a href=\"#\">Qui sequitur mutationem</a></li>
                            <li><a href=\"#\">videntur parum clar sollemnes</a></li>
                            <li><a href=\"#\">ullamcorper suscipit lobortis</a></li>
                        </ul>
                        <a href=\"#\" class=\"link1\">View all</a>
                    </div>
                </div>
                ";
        // line 146
        $this->displayBlock('body', $context, $blocks);
        // line 148
        echo "
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"brands\">
            <ul class=\"brand_icons\">
                <li><img src='";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon1.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
                <li><img src='";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon2.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
                <li><img src='";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon3.png"), "html", null, true);
        echo "' class=\"img-responsive\" alt=\"\"/></li>
                <li><img src='";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/icon4.png"), "html", null, true);
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
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\"alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
                <li><a class=\"popup-with-zoom-anim\" href=\"#small-dialog1\"><img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/i5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/></a></li>
                <div class=\"clearfix\"></div>
                <div id=\"small-dialog1\" class=\"mfp-hide\">
                    <div class=\"pop_up\">
                        <h4>A Sample Photo Stream</h4>
                        <img src=\"";
        // line 177
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
                <input type=\"submit\" value=\"Subscribe\">
            </div>
            <img src=\"";
        // line 234
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
</html>";
        
        $__internal_9ec1c7250a0b44f6b48de821ea875b9518fd2244be83de15c2554fb99168d448->leave($__internal_9ec1c7250a0b44f6b48de821ea875b9518fd2244be83de15c2554fb99168d448_prof);

        
        $__internal_685cbbc41711bdd64f6777ba1413c3436ebb5e137958f5335463f9e76a8baca4->leave($__internal_685cbbc41711bdd64f6777ba1413c3436ebb5e137958f5335463f9e76a8baca4_prof);

    }

    // line 146
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ce4fe327e73fd1ce8614db27254b879979ee2c98218e8efcf22350c823bd9d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce4fe327e73fd1ce8614db27254b879979ee2c98218e8efcf22350c823bd9d0->enter($__internal_6ce4fe327e73fd1ce8614db27254b879979ee2c98218e8efcf22350c823bd9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a586fc095753e57dc3c3be6ca990d15da3ff789a29fc5c1011acde3e4565857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a586fc095753e57dc3c3be6ca990d15da3ff789a29fc5c1011acde3e4565857->enter($__internal_1a586fc095753e57dc3c3be6ca990d15da3ff789a29fc5c1011acde3e4565857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 147
        echo "                ";
        
        $__internal_1a586fc095753e57dc3c3be6ca990d15da3ff789a29fc5c1011acde3e4565857->leave($__internal_1a586fc095753e57dc3c3be6ca990d15da3ff789a29fc5c1011acde3e4565857_prof);

        
        $__internal_6ce4fe327e73fd1ce8614db27254b879979ee2c98218e8efcf22350c823bd9d0->leave($__internal_6ce4fe327e73fd1ce8614db27254b879979ee2c98218e8efcf22350c823bd9d0_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 147,  360 => 146,  336 => 234,  276 => 177,  268 => 172,  264 => 171,  260 => 170,  256 => 169,  252 => 168,  239 => 158,  235 => 157,  231 => 156,  227 => 155,  218 => 148,  216 => 146,  167 => 100,  121 => 56,  113 => 54,  107 => 51,  103 => 50,  98 => 49,  96 => 48,  67 => 22,  63 => 21,  58 => 19,  51 => 15,  46 => 13,  42 => 12,  37 => 10,  26 => 1,);
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
    <title>Luxury Furnish an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Home :: w3layouts</title>
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
                <div class=\"col-md-3\">
                    <div class=\"menu_box\">
                        <h3 class=\"menu_head\">Menu</h3>
                        <ul class=\"nav\">
                            <li><a href=\"about.html\">About</a></li>
                            <li><a href=\"about.html\">Living Room</a></li>
                            <li><a href=\"about.html\">Office Furniture</a></li>
                            <li><a href=\"about.html\">Bean Bags</a></li>
                            <li><a href=\"about.html\">Tables</a></li>
                            <li><a href=\"about.html\">Sofas</a></li>
                            <li><a href=\"about.html\">Wardrobes</a></li>
                            <li><a href=\"about.html\">Beds</a></li>
                            <li><a href=\"typo.html\">Typo</a></li>
                            <li><a href=\"about.html\">Chairs</a></li>
                            <li><a href=\"about.html\">Kids Beds</a></li>
                        </ul>
                    </div>
                    <div class=\"side_banner\">
                        <div class=\"banner_img\"><img src=\"{{ asset('bundles/front/images/pic9.jpg') }}\" class=\"img-responsive\" alt=\"\"/></div>
                        <div class=\"banner_holder\">
                            <h3>Now <br> is <br> Open!</h3>
                        </div>
                    </div>
                    <div class=\"tags\">
                        <h4 class=\"tag_head\">Tags Widget</h4>
                        <ul class=\"tags_links\">
                            <li><a href=\"#\">Office</a></li>
                            <li><a href=\"#\">Chairs</a></li>
                            <li><a href=\"#\">Wood</a></li>
                            <li><a href=\"#\">Metal</a></li>
                            <li><a href=\"#\">Sizes</a></li>
                            <li><a href=\"#\">Women</a></li>
                            <li><a href=\"#\">Wardrobes</a></li>
                            <li><a href=\"#\">Latest</a></li>
                            <li><a href=\"#\">Kitchen</a></li>
                            <li><a href=\"#\">Tables</a></li>
                            <li><a href=\"#\">Modern</a></li>
                            <li><a href=\"#\">Colors</a></li>
                            <li><a href=\"#\">Shelves</a></li>
                            <li><a href=\"#\">Stools</a></li>
                            <li><a href=\"#\">Pouffes</a></li>
                            <li><a href=\"#\">Women</a></li>
                            <li><a href=\"#\">Bedroom</a></li>
                        </ul>
                        <a href=\"#\" class=\"link1\">View all tags</a>
                    </div>
                    <div class=\"tags\">
                        <h4 class=\"tag_head\">Articles Experts</h4>
                        <ul class=\"article_links\">
                            <li><a href=\"#\">Eleifend option congue nihil</a></li>
                            <li><a href=\"#\">Investigationes demonst</a></li>
                            <li><a href=\"#\">Qui sequitur mutationem</a></li>
                            <li><a href=\"#\">videntur parum clar sollemnes</a></li>
                            <li><a href=\"#\">ullamcorper suscipit lobortis</a></li>
                            <li><a href=\"#\">commodo consequat. Duis autem</a></li>
                            <li><a href=\"#\">Investigationes demonst</a></li>
                            <li><a href=\"#\">ullamcorper suscipit lobortis</a></li>
                            <li><a href=\"#\">Qui sequitur mutationem</a></li>
                            <li><a href=\"#\">videntur parum clar sollemnes</a></li>
                            <li><a href=\"#\">ullamcorper suscipit lobortis</a></li>
                        </ul>
                        <a href=\"#\" class=\"link1\">View all</a>
                    </div>
                </div>
                {% block body %}
                {% endblock body %}

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
                <input type=\"submit\" value=\"Subscribe\">
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
</html>", "FrontBundle::layout.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/FrontBundle/Resources/views/layout.html.twig");
    }
}
