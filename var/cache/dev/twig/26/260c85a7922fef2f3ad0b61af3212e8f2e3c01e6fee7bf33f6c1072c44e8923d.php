<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2173c23ff36a06fe96adedfcf4575c4893ce359982c0de8c181f03368bc315eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_86f77d19d9ebd46e3489c49ada75d786846d547e52935f7a4ef91f5649494aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f77d19d9ebd46e3489c49ada75d786846d547e52935f7a4ef91f5649494aab->enter($__internal_86f77d19d9ebd46e3489c49ada75d786846d547e52935f7a4ef91f5649494aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_f43cf791c3b20f94f76892548399076262847d97ab6e299cc71bfdf6818c6340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43cf791c3b20f94f76892548399076262847d97ab6e299cc71bfdf6818c6340->enter($__internal_f43cf791c3b20f94f76892548399076262847d97ab6e299cc71bfdf6818c6340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86f77d19d9ebd46e3489c49ada75d786846d547e52935f7a4ef91f5649494aab->leave($__internal_86f77d19d9ebd46e3489c49ada75d786846d547e52935f7a4ef91f5649494aab_prof);

        
        $__internal_f43cf791c3b20f94f76892548399076262847d97ab6e299cc71bfdf6818c6340->leave($__internal_f43cf791c3b20f94f76892548399076262847d97ab6e299cc71bfdf6818c6340_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61a4496b9b3c5f8bba97449bf7db25d0fae6801d1201cfb013cfd9b0797d7687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a4496b9b3c5f8bba97449bf7db25d0fae6801d1201cfb013cfd9b0797d7687->enter($__internal_61a4496b9b3c5f8bba97449bf7db25d0fae6801d1201cfb013cfd9b0797d7687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_29f755123c1f8f1d7d7bea9a5ca216d8f605ba48c871f848be08a764c211da30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f755123c1f8f1d7d7bea9a5ca216d8f605ba48c871f848be08a764c211da30->enter($__internal_29f755123c1f8f1d7d7bea9a5ca216d8f605ba48c871f848be08a764c211da30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_29f755123c1f8f1d7d7bea9a5ca216d8f605ba48c871f848be08a764c211da30->leave($__internal_29f755123c1f8f1d7d7bea9a5ca216d8f605ba48c871f848be08a764c211da30_prof);

        
        $__internal_61a4496b9b3c5f8bba97449bf7db25d0fae6801d1201cfb013cfd9b0797d7687->leave($__internal_61a4496b9b3c5f8bba97449bf7db25d0fae6801d1201cfb013cfd9b0797d7687_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Group/edit.html.twig");
    }
}
