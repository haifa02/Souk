<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_e67ac4dc69b9ca9a696f012d93fa1ff5c4e1979d61f6cccd3484eef7e387558f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_496e6b785170a7d2b577a9ca1ebcde9296beafe6c397412be12197e92aa3f7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496e6b785170a7d2b577a9ca1ebcde9296beafe6c397412be12197e92aa3f7d1->enter($__internal_496e6b785170a7d2b577a9ca1ebcde9296beafe6c397412be12197e92aa3f7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_0b9a1588511112c9bac5a2cd6fed71b4f2e0c50200fbdd65578aa65d70930c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9a1588511112c9bac5a2cd6fed71b4f2e0c50200fbdd65578aa65d70930c0b->enter($__internal_0b9a1588511112c9bac5a2cd6fed71b4f2e0c50200fbdd65578aa65d70930c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_496e6b785170a7d2b577a9ca1ebcde9296beafe6c397412be12197e92aa3f7d1->leave($__internal_496e6b785170a7d2b577a9ca1ebcde9296beafe6c397412be12197e92aa3f7d1_prof);

        
        $__internal_0b9a1588511112c9bac5a2cd6fed71b4f2e0c50200fbdd65578aa65d70930c0b->leave($__internal_0b9a1588511112c9bac5a2cd6fed71b4f2e0c50200fbdd65578aa65d70930c0b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8df1fc0c2500b73741815615df9f2e8c0fb088346c232955dfb42ecc7f49d946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df1fc0c2500b73741815615df9f2e8c0fb088346c232955dfb42ecc7f49d946->enter($__internal_8df1fc0c2500b73741815615df9f2e8c0fb088346c232955dfb42ecc7f49d946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_49d7c3b3246f4542dfff897d3e92fb8cdb315603289d5312fb86964098f188f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d7c3b3246f4542dfff897d3e92fb8cdb315603289d5312fb86964098f188f1->enter($__internal_49d7c3b3246f4542dfff897d3e92fb8cdb315603289d5312fb86964098f188f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_49d7c3b3246f4542dfff897d3e92fb8cdb315603289d5312fb86964098f188f1->leave($__internal_49d7c3b3246f4542dfff897d3e92fb8cdb315603289d5312fb86964098f188f1_prof);

        
        $__internal_8df1fc0c2500b73741815615df9f2e8c0fb088346c232955dfb42ecc7f49d946->leave($__internal_8df1fc0c2500b73741815615df9f2e8c0fb088346c232955dfb42ecc7f49d946_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
