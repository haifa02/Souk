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
        $__internal_e67abc4e159d2812de3d887fecc09c726f0139689d60f07e95d619f6ced2e606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e67abc4e159d2812de3d887fecc09c726f0139689d60f07e95d619f6ced2e606->enter($__internal_e67abc4e159d2812de3d887fecc09c726f0139689d60f07e95d619f6ced2e606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_735e7341b1a99135ff15e9fd1b9d33bd05de4511d4f62e975af76b319173c945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735e7341b1a99135ff15e9fd1b9d33bd05de4511d4f62e975af76b319173c945->enter($__internal_735e7341b1a99135ff15e9fd1b9d33bd05de4511d4f62e975af76b319173c945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e67abc4e159d2812de3d887fecc09c726f0139689d60f07e95d619f6ced2e606->leave($__internal_e67abc4e159d2812de3d887fecc09c726f0139689d60f07e95d619f6ced2e606_prof);

        
        $__internal_735e7341b1a99135ff15e9fd1b9d33bd05de4511d4f62e975af76b319173c945->leave($__internal_735e7341b1a99135ff15e9fd1b9d33bd05de4511d4f62e975af76b319173c945_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90d5a7e8066148ca668708a2d5520aa3aa5de55ff2dfba965eb23fd64fe14bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d5a7e8066148ca668708a2d5520aa3aa5de55ff2dfba965eb23fd64fe14bd8->enter($__internal_90d5a7e8066148ca668708a2d5520aa3aa5de55ff2dfba965eb23fd64fe14bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b0702927c5d61cb6f0187ed7916da14d9917f51ced951d8e64c50960b90debb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0702927c5d61cb6f0187ed7916da14d9917f51ced951d8e64c50960b90debb1->enter($__internal_b0702927c5d61cb6f0187ed7916da14d9917f51ced951d8e64c50960b90debb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_b0702927c5d61cb6f0187ed7916da14d9917f51ced951d8e64c50960b90debb1->leave($__internal_b0702927c5d61cb6f0187ed7916da14d9917f51ced951d8e64c50960b90debb1_prof);

        
        $__internal_90d5a7e8066148ca668708a2d5520aa3aa5de55ff2dfba965eb23fd64fe14bd8->leave($__internal_90d5a7e8066148ca668708a2d5520aa3aa5de55ff2dfba965eb23fd64fe14bd8_prof);

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
