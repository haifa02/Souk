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
        $__internal_2569e2d1a773655dbeeb53935a800977ca0389c83b219a8563c0670afc326827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2569e2d1a773655dbeeb53935a800977ca0389c83b219a8563c0670afc326827->enter($__internal_2569e2d1a773655dbeeb53935a800977ca0389c83b219a8563c0670afc326827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_64ee57071a1b0a63c2c492270dac91932d512d97fe7b9f856ec23140051f8e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ee57071a1b0a63c2c492270dac91932d512d97fe7b9f856ec23140051f8e2a->enter($__internal_64ee57071a1b0a63c2c492270dac91932d512d97fe7b9f856ec23140051f8e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2569e2d1a773655dbeeb53935a800977ca0389c83b219a8563c0670afc326827->leave($__internal_2569e2d1a773655dbeeb53935a800977ca0389c83b219a8563c0670afc326827_prof);

        
        $__internal_64ee57071a1b0a63c2c492270dac91932d512d97fe7b9f856ec23140051f8e2a->leave($__internal_64ee57071a1b0a63c2c492270dac91932d512d97fe7b9f856ec23140051f8e2a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d58e984f00b0dd31ef063baebc15a4895074e0a336e5c3cad436299f720796ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58e984f00b0dd31ef063baebc15a4895074e0a336e5c3cad436299f720796ba->enter($__internal_d58e984f00b0dd31ef063baebc15a4895074e0a336e5c3cad436299f720796ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bd240ae82a1f8e25d988059801f362c96c2346b7ef92cdc22420af7f1618653d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd240ae82a1f8e25d988059801f362c96c2346b7ef92cdc22420af7f1618653d->enter($__internal_bd240ae82a1f8e25d988059801f362c96c2346b7ef92cdc22420af7f1618653d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_bd240ae82a1f8e25d988059801f362c96c2346b7ef92cdc22420af7f1618653d->leave($__internal_bd240ae82a1f8e25d988059801f362c96c2346b7ef92cdc22420af7f1618653d_prof);

        
        $__internal_d58e984f00b0dd31ef063baebc15a4895074e0a336e5c3cad436299f720796ba->leave($__internal_d58e984f00b0dd31ef063baebc15a4895074e0a336e5c3cad436299f720796ba_prof);

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
