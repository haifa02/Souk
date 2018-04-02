<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8a710c15625199f6aea52d3f6915b910172e7d3c939fb68411d3e92927a52b33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_999480d62c590bb7f1aef225d457bb33c11063732ea1be767abdbd01c932ce75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999480d62c590bb7f1aef225d457bb33c11063732ea1be767abdbd01c932ce75->enter($__internal_999480d62c590bb7f1aef225d457bb33c11063732ea1be767abdbd01c932ce75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_2044da255a2b2a8e48571366b33821e0ac64f70f0e08c5b0bed8e3ca51d17767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2044da255a2b2a8e48571366b33821e0ac64f70f0e08c5b0bed8e3ca51d17767->enter($__internal_2044da255a2b2a8e48571366b33821e0ac64f70f0e08c5b0bed8e3ca51d17767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_999480d62c590bb7f1aef225d457bb33c11063732ea1be767abdbd01c932ce75->leave($__internal_999480d62c590bb7f1aef225d457bb33c11063732ea1be767abdbd01c932ce75_prof);

        
        $__internal_2044da255a2b2a8e48571366b33821e0ac64f70f0e08c5b0bed8e3ca51d17767->leave($__internal_2044da255a2b2a8e48571366b33821e0ac64f70f0e08c5b0bed8e3ca51d17767_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb91340747662999ab6e5b36a9dc8375ad8b5d2ebd0186fcf6d07af7cd897616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb91340747662999ab6e5b36a9dc8375ad8b5d2ebd0186fcf6d07af7cd897616->enter($__internal_cb91340747662999ab6e5b36a9dc8375ad8b5d2ebd0186fcf6d07af7cd897616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1847b5626ec7edb1c2b60cd551fe41f2780d3b09bab942bb0f12dde1789e2976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1847b5626ec7edb1c2b60cd551fe41f2780d3b09bab942bb0f12dde1789e2976->enter($__internal_1847b5626ec7edb1c2b60cd551fe41f2780d3b09bab942bb0f12dde1789e2976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1847b5626ec7edb1c2b60cd551fe41f2780d3b09bab942bb0f12dde1789e2976->leave($__internal_1847b5626ec7edb1c2b60cd551fe41f2780d3b09bab942bb0f12dde1789e2976_prof);

        
        $__internal_cb91340747662999ab6e5b36a9dc8375ad8b5d2ebd0186fcf6d07af7cd897616->leave($__internal_cb91340747662999ab6e5b36a9dc8375ad8b5d2ebd0186fcf6d07af7cd897616_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Group/show.html.twig");
    }
}
