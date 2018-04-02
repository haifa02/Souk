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
        $__internal_9f924d8b2df1599422caff0a01129417c03b9e9012416e73a45bf0dca60c9ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f924d8b2df1599422caff0a01129417c03b9e9012416e73a45bf0dca60c9ad7->enter($__internal_9f924d8b2df1599422caff0a01129417c03b9e9012416e73a45bf0dca60c9ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_44a006dc4e9ca955a477e3dbdd7e872404e22a1aeffdd57a75c993408e964511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a006dc4e9ca955a477e3dbdd7e872404e22a1aeffdd57a75c993408e964511->enter($__internal_44a006dc4e9ca955a477e3dbdd7e872404e22a1aeffdd57a75c993408e964511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f924d8b2df1599422caff0a01129417c03b9e9012416e73a45bf0dca60c9ad7->leave($__internal_9f924d8b2df1599422caff0a01129417c03b9e9012416e73a45bf0dca60c9ad7_prof);

        
        $__internal_44a006dc4e9ca955a477e3dbdd7e872404e22a1aeffdd57a75c993408e964511->leave($__internal_44a006dc4e9ca955a477e3dbdd7e872404e22a1aeffdd57a75c993408e964511_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f05aa6f610e856e584d93afdecf5b752f624e984166431d51544b2fb5de6631e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f05aa6f610e856e584d93afdecf5b752f624e984166431d51544b2fb5de6631e->enter($__internal_f05aa6f610e856e584d93afdecf5b752f624e984166431d51544b2fb5de6631e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cc9400a6d45aaedb79940c6f4054912f1379ed4138440e6f46853a95b68348bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9400a6d45aaedb79940c6f4054912f1379ed4138440e6f46853a95b68348bf->enter($__internal_cc9400a6d45aaedb79940c6f4054912f1379ed4138440e6f46853a95b68348bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_cc9400a6d45aaedb79940c6f4054912f1379ed4138440e6f46853a95b68348bf->leave($__internal_cc9400a6d45aaedb79940c6f4054912f1379ed4138440e6f46853a95b68348bf_prof);

        
        $__internal_f05aa6f610e856e584d93afdecf5b752f624e984166431d51544b2fb5de6631e->leave($__internal_f05aa6f610e856e584d93afdecf5b752f624e984166431d51544b2fb5de6631e_prof);

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
