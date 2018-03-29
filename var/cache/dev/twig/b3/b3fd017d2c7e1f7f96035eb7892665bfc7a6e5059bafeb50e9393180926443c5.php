<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_82885af7af0486ba3cc394a2a6a8edf0f5c7a830261bb2e8ff484472fcf97c53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_20415376f420a302c4dffe246551929ecc63c464cf9a25962d87d8f12cf03085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20415376f420a302c4dffe246551929ecc63c464cf9a25962d87d8f12cf03085->enter($__internal_20415376f420a302c4dffe246551929ecc63c464cf9a25962d87d8f12cf03085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_23e7bd514a46f90dbbcd305a39499ecd66b34f54654b78bb4dd835ada7af3108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e7bd514a46f90dbbcd305a39499ecd66b34f54654b78bb4dd835ada7af3108->enter($__internal_23e7bd514a46f90dbbcd305a39499ecd66b34f54654b78bb4dd835ada7af3108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20415376f420a302c4dffe246551929ecc63c464cf9a25962d87d8f12cf03085->leave($__internal_20415376f420a302c4dffe246551929ecc63c464cf9a25962d87d8f12cf03085_prof);

        
        $__internal_23e7bd514a46f90dbbcd305a39499ecd66b34f54654b78bb4dd835ada7af3108->leave($__internal_23e7bd514a46f90dbbcd305a39499ecd66b34f54654b78bb4dd835ada7af3108_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b05c4f8081a51109048f0043434ba60fac85a3e4fa90bcab10e6fd4ac29a681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b05c4f8081a51109048f0043434ba60fac85a3e4fa90bcab10e6fd4ac29a681->enter($__internal_8b05c4f8081a51109048f0043434ba60fac85a3e4fa90bcab10e6fd4ac29a681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_346ed5bf8de1ed12b397a6e2b053536bb88b119681ebc871867e4f86a82b0807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346ed5bf8de1ed12b397a6e2b053536bb88b119681ebc871867e4f86a82b0807->enter($__internal_346ed5bf8de1ed12b397a6e2b053536bb88b119681ebc871867e4f86a82b0807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_346ed5bf8de1ed12b397a6e2b053536bb88b119681ebc871867e4f86a82b0807->leave($__internal_346ed5bf8de1ed12b397a6e2b053536bb88b119681ebc871867e4f86a82b0807_prof);

        
        $__internal_8b05c4f8081a51109048f0043434ba60fac85a3e4fa90bcab10e6fd4ac29a681->leave($__internal_8b05c4f8081a51109048f0043434ba60fac85a3e4fa90bcab10e6fd4ac29a681_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Group/new.html.twig");
    }
}
