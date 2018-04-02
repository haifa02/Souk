<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_447065f7f07af19f1cee25a0d876976bba6bfb58d9ef0f48503827aa6bea603b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5677b3e460bb303900d2edc9ad133fa7004784c2a32f718f0fc491d6539bcbc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5677b3e460bb303900d2edc9ad133fa7004784c2a32f718f0fc491d6539bcbc4->enter($__internal_5677b3e460bb303900d2edc9ad133fa7004784c2a32f718f0fc491d6539bcbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_66cf13476e5edae40f0f2e91e6418118863a387c3e8ed8dbef3f2d09d4d879c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66cf13476e5edae40f0f2e91e6418118863a387c3e8ed8dbef3f2d09d4d879c7->enter($__internal_66cf13476e5edae40f0f2e91e6418118863a387c3e8ed8dbef3f2d09d4d879c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5677b3e460bb303900d2edc9ad133fa7004784c2a32f718f0fc491d6539bcbc4->leave($__internal_5677b3e460bb303900d2edc9ad133fa7004784c2a32f718f0fc491d6539bcbc4_prof);

        
        $__internal_66cf13476e5edae40f0f2e91e6418118863a387c3e8ed8dbef3f2d09d4d879c7->leave($__internal_66cf13476e5edae40f0f2e91e6418118863a387c3e8ed8dbef3f2d09d4d879c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_22c44a80fd3a0ae5662eb0cb6fba469be8e0eec384d3853451089b0be5e93a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c44a80fd3a0ae5662eb0cb6fba469be8e0eec384d3853451089b0be5e93a20->enter($__internal_22c44a80fd3a0ae5662eb0cb6fba469be8e0eec384d3853451089b0be5e93a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_10a9d6dbb06f7dcfccc51f2f775ea3ef0d76e0bc1410b33eb582c4062eb42aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a9d6dbb06f7dcfccc51f2f775ea3ef0d76e0bc1410b33eb582c4062eb42aab->enter($__internal_10a9d6dbb06f7dcfccc51f2f775ea3ef0d76e0bc1410b33eb582c4062eb42aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_10a9d6dbb06f7dcfccc51f2f775ea3ef0d76e0bc1410b33eb582c4062eb42aab->leave($__internal_10a9d6dbb06f7dcfccc51f2f775ea3ef0d76e0bc1410b33eb582c4062eb42aab_prof);

        
        $__internal_22c44a80fd3a0ae5662eb0cb6fba469be8e0eec384d3853451089b0be5e93a20->leave($__internal_22c44a80fd3a0ae5662eb0cb6fba469be8e0eec384d3853451089b0be5e93a20_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d93a480adf1042570d09529861b54af389a50b2906efdc75cee7b721c1195004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d93a480adf1042570d09529861b54af389a50b2906efdc75cee7b721c1195004->enter($__internal_d93a480adf1042570d09529861b54af389a50b2906efdc75cee7b721c1195004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f931872e9d5d6d94df32b4d61f10d2c3c7ef52a312ff25c1c5a148cb3efd2fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f931872e9d5d6d94df32b4d61f10d2c3c7ef52a312ff25c1c5a148cb3efd2fc0->enter($__internal_f931872e9d5d6d94df32b4d61f10d2c3c7ef52a312ff25c1c5a148cb3efd2fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f931872e9d5d6d94df32b4d61f10d2c3c7ef52a312ff25c1c5a148cb3efd2fc0->leave($__internal_f931872e9d5d6d94df32b4d61f10d2c3c7ef52a312ff25c1c5a148cb3efd2fc0_prof);

        
        $__internal_d93a480adf1042570d09529861b54af389a50b2906efdc75cee7b721c1195004->leave($__internal_d93a480adf1042570d09529861b54af389a50b2906efdc75cee7b721c1195004_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b50a51f4ff95ad564fdce02026685a2eaf9143f7837033bb4e669913eb9dca6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50a51f4ff95ad564fdce02026685a2eaf9143f7837033bb4e669913eb9dca6b->enter($__internal_b50a51f4ff95ad564fdce02026685a2eaf9143f7837033bb4e669913eb9dca6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ad71cb80035a364b007dba0fd94baece23429b36061125c588984b09050ad3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad71cb80035a364b007dba0fd94baece23429b36061125c588984b09050ad3a8->enter($__internal_ad71cb80035a364b007dba0fd94baece23429b36061125c588984b09050ad3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ad71cb80035a364b007dba0fd94baece23429b36061125c588984b09050ad3a8->leave($__internal_ad71cb80035a364b007dba0fd94baece23429b36061125c588984b09050ad3a8_prof);

        
        $__internal_b50a51f4ff95ad564fdce02026685a2eaf9143f7837033bb4e669913eb9dca6b->leave($__internal_b50a51f4ff95ad564fdce02026685a2eaf9143f7837033bb4e669913eb9dca6b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
