<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6bdc415026468751b0fd3b8ea4bb5b8b9e992dbfca85e1c86f20068b91fbe660 extends Twig_Template
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
        $__internal_7cd1f8198acce29149bbcbe6fb43a4dc46558b4296ba4c4a7677d64c733f23c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd1f8198acce29149bbcbe6fb43a4dc46558b4296ba4c4a7677d64c733f23c0->enter($__internal_7cd1f8198acce29149bbcbe6fb43a4dc46558b4296ba4c4a7677d64c733f23c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_533bcb247f245feb736a377e3a4fc4076c167760eab1fb50a3938d71b1a0a674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533bcb247f245feb736a377e3a4fc4076c167760eab1fb50a3938d71b1a0a674->enter($__internal_533bcb247f245feb736a377e3a4fc4076c167760eab1fb50a3938d71b1a0a674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cd1f8198acce29149bbcbe6fb43a4dc46558b4296ba4c4a7677d64c733f23c0->leave($__internal_7cd1f8198acce29149bbcbe6fb43a4dc46558b4296ba4c4a7677d64c733f23c0_prof);

        
        $__internal_533bcb247f245feb736a377e3a4fc4076c167760eab1fb50a3938d71b1a0a674->leave($__internal_533bcb247f245feb736a377e3a4fc4076c167760eab1fb50a3938d71b1a0a674_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_344f3f6c0290dd22d73c9fb292d0f9bc8d3fb46cd9a1950cdae9cd2766a9baa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344f3f6c0290dd22d73c9fb292d0f9bc8d3fb46cd9a1950cdae9cd2766a9baa8->enter($__internal_344f3f6c0290dd22d73c9fb292d0f9bc8d3fb46cd9a1950cdae9cd2766a9baa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f28e07e5f5e878111c902c656e7b88c8ef29eb078c6d50c48bdcfb48d62ece8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28e07e5f5e878111c902c656e7b88c8ef29eb078c6d50c48bdcfb48d62ece8a->enter($__internal_f28e07e5f5e878111c902c656e7b88c8ef29eb078c6d50c48bdcfb48d62ece8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f28e07e5f5e878111c902c656e7b88c8ef29eb078c6d50c48bdcfb48d62ece8a->leave($__internal_f28e07e5f5e878111c902c656e7b88c8ef29eb078c6d50c48bdcfb48d62ece8a_prof);

        
        $__internal_344f3f6c0290dd22d73c9fb292d0f9bc8d3fb46cd9a1950cdae9cd2766a9baa8->leave($__internal_344f3f6c0290dd22d73c9fb292d0f9bc8d3fb46cd9a1950cdae9cd2766a9baa8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aca7b7cbcda4edabd712d5d82aba44ce6b3b927b009fc983ade76a2a15d2bfa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca7b7cbcda4edabd712d5d82aba44ce6b3b927b009fc983ade76a2a15d2bfa8->enter($__internal_aca7b7cbcda4edabd712d5d82aba44ce6b3b927b009fc983ade76a2a15d2bfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8693eae63e1505fea822ddc1d32b8ba6232c9ff7d2f937349981166b32fed37f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8693eae63e1505fea822ddc1d32b8ba6232c9ff7d2f937349981166b32fed37f->enter($__internal_8693eae63e1505fea822ddc1d32b8ba6232c9ff7d2f937349981166b32fed37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8693eae63e1505fea822ddc1d32b8ba6232c9ff7d2f937349981166b32fed37f->leave($__internal_8693eae63e1505fea822ddc1d32b8ba6232c9ff7d2f937349981166b32fed37f_prof);

        
        $__internal_aca7b7cbcda4edabd712d5d82aba44ce6b3b927b009fc983ade76a2a15d2bfa8->leave($__internal_aca7b7cbcda4edabd712d5d82aba44ce6b3b927b009fc983ade76a2a15d2bfa8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b19705bb272e0f58a2616987d2e7ec4ecb6be93e1c572c55bb6a050618653ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b19705bb272e0f58a2616987d2e7ec4ecb6be93e1c572c55bb6a050618653ca->enter($__internal_0b19705bb272e0f58a2616987d2e7ec4ecb6be93e1c572c55bb6a050618653ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_51855873bff21263b2a603cf6265d45352869eb3de3c9cc1db3b0d39ec1a8100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51855873bff21263b2a603cf6265d45352869eb3de3c9cc1db3b0d39ec1a8100->enter($__internal_51855873bff21263b2a603cf6265d45352869eb3de3c9cc1db3b0d39ec1a8100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_51855873bff21263b2a603cf6265d45352869eb3de3c9cc1db3b0d39ec1a8100->leave($__internal_51855873bff21263b2a603cf6265d45352869eb3de3c9cc1db3b0d39ec1a8100_prof);

        
        $__internal_0b19705bb272e0f58a2616987d2e7ec4ecb6be93e1c572c55bb6a050618653ca->leave($__internal_0b19705bb272e0f58a2616987d2e7ec4ecb6be93e1c572c55bb6a050618653ca_prof);

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
