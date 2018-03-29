<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a6d5f47775eae9850b0e5f541b5c0dcb4b38377a11f553de088e708b28b9c897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_61ff612abae603b8c9c7c2ef3e0c1b0b44ceef12ded963803d6b90a115af7a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ff612abae603b8c9c7c2ef3e0c1b0b44ceef12ded963803d6b90a115af7a64->enter($__internal_61ff612abae603b8c9c7c2ef3e0c1b0b44ceef12ded963803d6b90a115af7a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e703d89447dae34b23f1135bd5bfb7090a506cef1209d634bba5c192174b3564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e703d89447dae34b23f1135bd5bfb7090a506cef1209d634bba5c192174b3564->enter($__internal_e703d89447dae34b23f1135bd5bfb7090a506cef1209d634bba5c192174b3564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61ff612abae603b8c9c7c2ef3e0c1b0b44ceef12ded963803d6b90a115af7a64->leave($__internal_61ff612abae603b8c9c7c2ef3e0c1b0b44ceef12ded963803d6b90a115af7a64_prof);

        
        $__internal_e703d89447dae34b23f1135bd5bfb7090a506cef1209d634bba5c192174b3564->leave($__internal_e703d89447dae34b23f1135bd5bfb7090a506cef1209d634bba5c192174b3564_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_752b629803d7fb57093e16a857eb024fd0577c467799c4123b958efbaf1beaa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_752b629803d7fb57093e16a857eb024fd0577c467799c4123b958efbaf1beaa8->enter($__internal_752b629803d7fb57093e16a857eb024fd0577c467799c4123b958efbaf1beaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7e3239224ac1e5c915a59115339036220644d4f39b5187108643d95ec7b9a046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3239224ac1e5c915a59115339036220644d4f39b5187108643d95ec7b9a046->enter($__internal_7e3239224ac1e5c915a59115339036220644d4f39b5187108643d95ec7b9a046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7e3239224ac1e5c915a59115339036220644d4f39b5187108643d95ec7b9a046->leave($__internal_7e3239224ac1e5c915a59115339036220644d4f39b5187108643d95ec7b9a046_prof);

        
        $__internal_752b629803d7fb57093e16a857eb024fd0577c467799c4123b958efbaf1beaa8->leave($__internal_752b629803d7fb57093e16a857eb024fd0577c467799c4123b958efbaf1beaa8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d07527a0af7fcaed9e969e40a820c2569f824c78344bbccfdf7ce109a0e487a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d07527a0af7fcaed9e969e40a820c2569f824c78344bbccfdf7ce109a0e487a->enter($__internal_1d07527a0af7fcaed9e969e40a820c2569f824c78344bbccfdf7ce109a0e487a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6c2248a7dd540412d3a79168d363bc1dc12f7d5ff465ea9b5c54eb1419f54a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2248a7dd540412d3a79168d363bc1dc12f7d5ff465ea9b5c54eb1419f54a2c->enter($__internal_6c2248a7dd540412d3a79168d363bc1dc12f7d5ff465ea9b5c54eb1419f54a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6c2248a7dd540412d3a79168d363bc1dc12f7d5ff465ea9b5c54eb1419f54a2c->leave($__internal_6c2248a7dd540412d3a79168d363bc1dc12f7d5ff465ea9b5c54eb1419f54a2c_prof);

        
        $__internal_1d07527a0af7fcaed9e969e40a820c2569f824c78344bbccfdf7ce109a0e487a->leave($__internal_1d07527a0af7fcaed9e969e40a820c2569f824c78344bbccfdf7ce109a0e487a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_969ef3f81e6a0ed8f2757f00eb60bbe0aab9d7049f72eb5779a2af8734b771d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_969ef3f81e6a0ed8f2757f00eb60bbe0aab9d7049f72eb5779a2af8734b771d7->enter($__internal_969ef3f81e6a0ed8f2757f00eb60bbe0aab9d7049f72eb5779a2af8734b771d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2300475e4471b6b46daa17787f011f133f9fc182045be68c24f50833529894bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2300475e4471b6b46daa17787f011f133f9fc182045be68c24f50833529894bb->enter($__internal_2300475e4471b6b46daa17787f011f133f9fc182045be68c24f50833529894bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2300475e4471b6b46daa17787f011f133f9fc182045be68c24f50833529894bb->leave($__internal_2300475e4471b6b46daa17787f011f133f9fc182045be68c24f50833529894bb_prof);

        
        $__internal_969ef3f81e6a0ed8f2757f00eb60bbe0aab9d7049f72eb5779a2af8734b771d7->leave($__internal_969ef3f81e6a0ed8f2757f00eb60bbe0aab9d7049f72eb5779a2af8734b771d7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
