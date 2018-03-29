<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0ab001a24afed74516875dacdd932ebfc2f05febb2f25b979dc332a2350f7fc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_eedc6d57172bdbbda26dba1453abdc043d4d1b2166bfa9a03a8b2eb7ebfdf1fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eedc6d57172bdbbda26dba1453abdc043d4d1b2166bfa9a03a8b2eb7ebfdf1fd->enter($__internal_eedc6d57172bdbbda26dba1453abdc043d4d1b2166bfa9a03a8b2eb7ebfdf1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_5275286e2580718d0eeb84d3d2d152b39dc0df859cf36a0afc6b78448641991c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5275286e2580718d0eeb84d3d2d152b39dc0df859cf36a0afc6b78448641991c->enter($__internal_5275286e2580718d0eeb84d3d2d152b39dc0df859cf36a0afc6b78448641991c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eedc6d57172bdbbda26dba1453abdc043d4d1b2166bfa9a03a8b2eb7ebfdf1fd->leave($__internal_eedc6d57172bdbbda26dba1453abdc043d4d1b2166bfa9a03a8b2eb7ebfdf1fd_prof);

        
        $__internal_5275286e2580718d0eeb84d3d2d152b39dc0df859cf36a0afc6b78448641991c->leave($__internal_5275286e2580718d0eeb84d3d2d152b39dc0df859cf36a0afc6b78448641991c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_065fa1f5940b1c2894de7828e40d99e2326f439b1153ce7e78d27a5ba3fb298a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065fa1f5940b1c2894de7828e40d99e2326f439b1153ce7e78d27a5ba3fb298a->enter($__internal_065fa1f5940b1c2894de7828e40d99e2326f439b1153ce7e78d27a5ba3fb298a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4faa41dcde7ff5160696407d2175f9149af4c70f0551684d914fc732f7f184ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4faa41dcde7ff5160696407d2175f9149af4c70f0551684d914fc732f7f184ae->enter($__internal_4faa41dcde7ff5160696407d2175f9149af4c70f0551684d914fc732f7f184ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4faa41dcde7ff5160696407d2175f9149af4c70f0551684d914fc732f7f184ae->leave($__internal_4faa41dcde7ff5160696407d2175f9149af4c70f0551684d914fc732f7f184ae_prof);

        
        $__internal_065fa1f5940b1c2894de7828e40d99e2326f439b1153ce7e78d27a5ba3fb298a->leave($__internal_065fa1f5940b1c2894de7828e40d99e2326f439b1153ce7e78d27a5ba3fb298a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/opt/lampp/htdocs/dev/souk/src/Souk/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
