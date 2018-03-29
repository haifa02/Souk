<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_421b7834f78b59206da8e168778fb541e4f237f912a224563e80bed1028ba304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4961449188145ec11ed37e9b5ca661349f863383777f90d1202a2e157f090c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4961449188145ec11ed37e9b5ca661349f863383777f90d1202a2e157f090c85->enter($__internal_4961449188145ec11ed37e9b5ca661349f863383777f90d1202a2e157f090c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_eb18000f2c960d157d2c38a496beea136495a3cd6cff126933b5754ca9e72381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb18000f2c960d157d2c38a496beea136495a3cd6cff126933b5754ca9e72381->enter($__internal_eb18000f2c960d157d2c38a496beea136495a3cd6cff126933b5754ca9e72381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4961449188145ec11ed37e9b5ca661349f863383777f90d1202a2e157f090c85->leave($__internal_4961449188145ec11ed37e9b5ca661349f863383777f90d1202a2e157f090c85_prof);

        
        $__internal_eb18000f2c960d157d2c38a496beea136495a3cd6cff126933b5754ca9e72381->leave($__internal_eb18000f2c960d157d2c38a496beea136495a3cd6cff126933b5754ca9e72381_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d7915a19714dce86bb78b99115b0f980e9bfeb481c8fe54fd99e0a67b36e5ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7915a19714dce86bb78b99115b0f980e9bfeb481c8fe54fd99e0a67b36e5ac->enter($__internal_2d7915a19714dce86bb78b99115b0f980e9bfeb481c8fe54fd99e0a67b36e5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_84416305d22af6df0d47a91aaed52b9ebbfaf3e3da7db306bb7c0434f7462f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84416305d22af6df0d47a91aaed52b9ebbfaf3e3da7db306bb7c0434f7462f77->enter($__internal_84416305d22af6df0d47a91aaed52b9ebbfaf3e3da7db306bb7c0434f7462f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_84416305d22af6df0d47a91aaed52b9ebbfaf3e3da7db306bb7c0434f7462f77->leave($__internal_84416305d22af6df0d47a91aaed52b9ebbfaf3e3da7db306bb7c0434f7462f77_prof);

        
        $__internal_2d7915a19714dce86bb78b99115b0f980e9bfeb481c8fe54fd99e0a67b36e5ac->leave($__internal_2d7915a19714dce86bb78b99115b0f980e9bfeb481c8fe54fd99e0a67b36e5ac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
