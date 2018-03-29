<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_8eef25a22c00e479feb126c8d6f70a3514036e1c03e4f69f4217f9b076c01edf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_8e8090d30a99bb6a5b8e61910dede46dc712990beb3500439a253d2ec6c9f745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8090d30a99bb6a5b8e61910dede46dc712990beb3500439a253d2ec6c9f745->enter($__internal_8e8090d30a99bb6a5b8e61910dede46dc712990beb3500439a253d2ec6c9f745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_6a9d1eaff0d818bfc3947a21c095ebe5f7e8291c23d0ec0b44de31300175ee7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9d1eaff0d818bfc3947a21c095ebe5f7e8291c23d0ec0b44de31300175ee7c->enter($__internal_6a9d1eaff0d818bfc3947a21c095ebe5f7e8291c23d0ec0b44de31300175ee7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e8090d30a99bb6a5b8e61910dede46dc712990beb3500439a253d2ec6c9f745->leave($__internal_8e8090d30a99bb6a5b8e61910dede46dc712990beb3500439a253d2ec6c9f745_prof);

        
        $__internal_6a9d1eaff0d818bfc3947a21c095ebe5f7e8291c23d0ec0b44de31300175ee7c->leave($__internal_6a9d1eaff0d818bfc3947a21c095ebe5f7e8291c23d0ec0b44de31300175ee7c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de75923847f817dce0fcfd4d683f3fe0467ce1fbf41bb60de5e7f885d411558c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de75923847f817dce0fcfd4d683f3fe0467ce1fbf41bb60de5e7f885d411558c->enter($__internal_de75923847f817dce0fcfd4d683f3fe0467ce1fbf41bb60de5e7f885d411558c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b7d8492b73c06a23ac37cc5195ed61359942e95d1c56d8ccde64f5458254dac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d8492b73c06a23ac37cc5195ed61359942e95d1c56d8ccde64f5458254dac6->enter($__internal_b7d8492b73c06a23ac37cc5195ed61359942e95d1c56d8ccde64f5458254dac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b7d8492b73c06a23ac37cc5195ed61359942e95d1c56d8ccde64f5458254dac6->leave($__internal_b7d8492b73c06a23ac37cc5195ed61359942e95d1c56d8ccde64f5458254dac6_prof);

        
        $__internal_de75923847f817dce0fcfd4d683f3fe0467ce1fbf41bb60de5e7f885d411558c->leave($__internal_de75923847f817dce0fcfd4d683f3fe0467ce1fbf41bb60de5e7f885d411558c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Group/list.html.twig");
    }
}
