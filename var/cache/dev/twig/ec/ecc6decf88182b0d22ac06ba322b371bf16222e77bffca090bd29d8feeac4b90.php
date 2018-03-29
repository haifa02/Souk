<?php

/* FrontBundle:default:index.html.twig */
class __TwigTemplate_d808a6588d0add8db5dce74de87440e20f3ec17e2c80f409dcc3967418a8eeab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd2ffcafbf98e1f33a6e9222f2861a21245bebae9e0265e840d050c91d8e965c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd2ffcafbf98e1f33a6e9222f2861a21245bebae9e0265e840d050c91d8e965c->enter($__internal_dd2ffcafbf98e1f33a6e9222f2861a21245bebae9e0265e840d050c91d8e965c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:default:index.html.twig"));

        $__internal_9149b7c49995f5d2bfa5c95afccd9b3c4a46066447dccc5722892b96063c1682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9149b7c49995f5d2bfa5c95afccd9b3c4a46066447dccc5722892b96063c1682->enter($__internal_9149b7c49995f5d2bfa5c95afccd9b3c4a46066447dccc5722892b96063c1682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd2ffcafbf98e1f33a6e9222f2861a21245bebae9e0265e840d050c91d8e965c->leave($__internal_dd2ffcafbf98e1f33a6e9222f2861a21245bebae9e0265e840d050c91d8e965c_prof);

        
        $__internal_9149b7c49995f5d2bfa5c95afccd9b3c4a46066447dccc5722892b96063c1682->leave($__internal_9149b7c49995f5d2bfa5c95afccd9b3c4a46066447dccc5722892b96063c1682_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d4efa8c11017f625acb286c7a74e0cb8e7d418e7ab5cfa25d0cf24b3c33e54b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d4efa8c11017f625acb286c7a74e0cb8e7d418e7ab5cfa25d0cf24b3c33e54b->enter($__internal_1d4efa8c11017f625acb286c7a74e0cb8e7d418e7ab5cfa25d0cf24b3c33e54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3ed31cefcd4f4c9389ddf5d69f605bc18b7f5f4e3c128f13ed75f3f07a152b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ed31cefcd4f4c9389ddf5d69f605bc18b7f5f4e3c128f13ed75f3f07a152b3->enter($__internal_c3ed31cefcd4f4c9389ddf5d69f605bc18b7f5f4e3c128f13ed75f3f07a152b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h3 class=\"m_1\">New Products</h3>
    <div class=\"content_grid\">
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$2300.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$1500.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$2000.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"content_grid\">
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$1700.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$800.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$199.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <h3 class=\"m_2\">Top Products</h3>
    <div class=\"content_grid\">
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic7.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$4500.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic8.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$1050.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic13.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$2000.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <h3 class=\"m_2\">Sale Products</h3>
    <div class=\"content_grid\">
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"single.html\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic10.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$99.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$60.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/front/images/pic12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$900.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"clearfix\"></div>
    </div>
";
        
        $__internal_c3ed31cefcd4f4c9389ddf5d69f605bc18b7f5f4e3c128f13ed75f3f07a152b3->leave($__internal_c3ed31cefcd4f4c9389ddf5d69f605bc18b7f5f4e3c128f13ed75f3f07a152b3_prof);

        
        $__internal_1d4efa8c11017f625acb286c7a74e0cb8e7d418e7ab5cfa25d0cf24b3c33e54b->leave($__internal_1d4efa8c11017f625acb286c7a74e0cb8e7d418e7ab5cfa25d0cf24b3c33e54b_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 208,  268 => 191,  248 => 174,  224 => 153,  204 => 136,  184 => 119,  160 => 98,  140 => 81,  120 => 64,  97 => 44,  77 => 27,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontBundle::layout.html.twig' %}

{% block body %}
    <h3 class=\"m_1\">New Products</h3>
    <div class=\"content_grid\">
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic1.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$2300.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic2.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$1500.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic3.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$2000.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"content_grid\">
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic4.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$1700.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic5.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$800.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic6.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$199.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <h3 class=\"m_2\">Top Products</h3>
    <div class=\"content_grid\">
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic7.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$4500.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic8.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$1050.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic13.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$2000.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <h3 class=\"m_2\">Sale Products</h3>
    <div class=\"content_grid\">
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"single.html\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic10.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$99.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic11.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$60.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col_1_of_3 span_1_of_3 simpleCart_shelfItem last_1\">
            <a href=\"\">
                <div class=\"inner_content clearfix\">
                    <div class=\"product_image\">
                        <img src=\"{{ asset('bundles/front/images/pic12.jpg') }}\" class=\"img-responsive\" alt=\"\"/>
                        <a href=\"\" class=\"button item_add item_1\"> </a>
                        <div class=\"product_container\">
                            <div class=\"cart-left\">
                                <p class=\"title\">Lorem Ipsum 2015</p>
                            </div>
                            <span class=\"amount item_price\">\$900.00</span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"clearfix\"></div>
    </div>
{% endblock %}
", "FrontBundle:default:index.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\Souk\\src\\Souk\\FrontBundle/Resources/views/default/index.html.twig");
    }
}
