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
        $__internal_da9704b4f9a5a2b05fb655eb271ad392753e4496dee6870065f6c986989f1747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da9704b4f9a5a2b05fb655eb271ad392753e4496dee6870065f6c986989f1747->enter($__internal_da9704b4f9a5a2b05fb655eb271ad392753e4496dee6870065f6c986989f1747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_17ba48b46db54e18fada6f90d4f396646965bf4d779dc81c8d4c56cfef888434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ba48b46db54e18fada6f90d4f396646965bf4d779dc81c8d4c56cfef888434->enter($__internal_17ba48b46db54e18fada6f90d4f396646965bf4d779dc81c8d4c56cfef888434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da9704b4f9a5a2b05fb655eb271ad392753e4496dee6870065f6c986989f1747->leave($__internal_da9704b4f9a5a2b05fb655eb271ad392753e4496dee6870065f6c986989f1747_prof);

        
        $__internal_17ba48b46db54e18fada6f90d4f396646965bf4d779dc81c8d4c56cfef888434->leave($__internal_17ba48b46db54e18fada6f90d4f396646965bf4d779dc81c8d4c56cfef888434_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33a4af7bdc3119b217592a4e286df96136945969bd7750807d21296c2cbad498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a4af7bdc3119b217592a4e286df96136945969bd7750807d21296c2cbad498->enter($__internal_33a4af7bdc3119b217592a4e286df96136945969bd7750807d21296c2cbad498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_582cf382778484e05855d74467aa64150fdf1d6896327e491581cd961bf40be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582cf382778484e05855d74467aa64150fdf1d6896327e491581cd961bf40be4->enter($__internal_582cf382778484e05855d74467aa64150fdf1d6896327e491581cd961bf40be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_582cf382778484e05855d74467aa64150fdf1d6896327e491581cd961bf40be4->leave($__internal_582cf382778484e05855d74467aa64150fdf1d6896327e491581cd961bf40be4_prof);

        
        $__internal_33a4af7bdc3119b217592a4e286df96136945969bd7750807d21296c2cbad498->leave($__internal_33a4af7bdc3119b217592a4e286df96136945969bd7750807d21296c2cbad498_prof);

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
