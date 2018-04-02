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
        $__internal_6fd186c7810b269cffb6108640d9e58caa1cc616631d80997ad093a209d26a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd186c7810b269cffb6108640d9e58caa1cc616631d80997ad093a209d26a3d->enter($__internal_6fd186c7810b269cffb6108640d9e58caa1cc616631d80997ad093a209d26a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_8300b14fae7076929d881ac51846ddce5035151bfb0949fc497c4437898340f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8300b14fae7076929d881ac51846ddce5035151bfb0949fc497c4437898340f9->enter($__internal_8300b14fae7076929d881ac51846ddce5035151bfb0949fc497c4437898340f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fd186c7810b269cffb6108640d9e58caa1cc616631d80997ad093a209d26a3d->leave($__internal_6fd186c7810b269cffb6108640d9e58caa1cc616631d80997ad093a209d26a3d_prof);

        
        $__internal_8300b14fae7076929d881ac51846ddce5035151bfb0949fc497c4437898340f9->leave($__internal_8300b14fae7076929d881ac51846ddce5035151bfb0949fc497c4437898340f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c073fd4b970837d4c01ff7613765042f887dc2e5b7e8248c4f018334b8bb1751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c073fd4b970837d4c01ff7613765042f887dc2e5b7e8248c4f018334b8bb1751->enter($__internal_c073fd4b970837d4c01ff7613765042f887dc2e5b7e8248c4f018334b8bb1751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7180a0a4039f4051cb42c2f0a7393591388f170880c9d97e0054ee4d7c0fc4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7180a0a4039f4051cb42c2f0a7393591388f170880c9d97e0054ee4d7c0fc4d0->enter($__internal_7180a0a4039f4051cb42c2f0a7393591388f170880c9d97e0054ee4d7c0fc4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_7180a0a4039f4051cb42c2f0a7393591388f170880c9d97e0054ee4d7c0fc4d0->leave($__internal_7180a0a4039f4051cb42c2f0a7393591388f170880c9d97e0054ee4d7c0fc4d0_prof);

        
        $__internal_c073fd4b970837d4c01ff7613765042f887dc2e5b7e8248c4f018334b8bb1751->leave($__internal_c073fd4b970837d4c01ff7613765042f887dc2e5b7e8248c4f018334b8bb1751_prof);

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
