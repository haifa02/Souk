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
        $__internal_dd661fe9ecdf0c03e50a34f4cbc76ad3d5e9dff70a9d81716eb51eab89810760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd661fe9ecdf0c03e50a34f4cbc76ad3d5e9dff70a9d81716eb51eab89810760->enter($__internal_dd661fe9ecdf0c03e50a34f4cbc76ad3d5e9dff70a9d81716eb51eab89810760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_533520c1975f1968663080b35ba9710da11946410e94a1e917594009c948ce7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533520c1975f1968663080b35ba9710da11946410e94a1e917594009c948ce7d->enter($__internal_533520c1975f1968663080b35ba9710da11946410e94a1e917594009c948ce7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd661fe9ecdf0c03e50a34f4cbc76ad3d5e9dff70a9d81716eb51eab89810760->leave($__internal_dd661fe9ecdf0c03e50a34f4cbc76ad3d5e9dff70a9d81716eb51eab89810760_prof);

        
        $__internal_533520c1975f1968663080b35ba9710da11946410e94a1e917594009c948ce7d->leave($__internal_533520c1975f1968663080b35ba9710da11946410e94a1e917594009c948ce7d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b250a3b49b645f4483992153f0c682413b736dd87d194bdb4ca5c8e02725b607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b250a3b49b645f4483992153f0c682413b736dd87d194bdb4ca5c8e02725b607->enter($__internal_b250a3b49b645f4483992153f0c682413b736dd87d194bdb4ca5c8e02725b607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8d088d36e43ca317c29d478f26688a0ef7d9a014b23e5e66d9acaa4348d6a566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d088d36e43ca317c29d478f26688a0ef7d9a014b23e5e66d9acaa4348d6a566->enter($__internal_8d088d36e43ca317c29d478f26688a0ef7d9a014b23e5e66d9acaa4348d6a566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8d088d36e43ca317c29d478f26688a0ef7d9a014b23e5e66d9acaa4348d6a566->leave($__internal_8d088d36e43ca317c29d478f26688a0ef7d9a014b23e5e66d9acaa4348d6a566_prof);

        
        $__internal_b250a3b49b645f4483992153f0c682413b736dd87d194bdb4ca5c8e02725b607->leave($__internal_b250a3b49b645f4483992153f0c682413b736dd87d194bdb4ca5c8e02725b607_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a835b19ebebc8b65316a7f5cf1fec03850b9a9324ddf81bf05e998e3455372a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a835b19ebebc8b65316a7f5cf1fec03850b9a9324ddf81bf05e998e3455372a8->enter($__internal_a835b19ebebc8b65316a7f5cf1fec03850b9a9324ddf81bf05e998e3455372a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e4f6e0ec4884a24ba63420a92af01a0078d0b54eec4334fa517533845eaa6c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f6e0ec4884a24ba63420a92af01a0078d0b54eec4334fa517533845eaa6c01->enter($__internal_e4f6e0ec4884a24ba63420a92af01a0078d0b54eec4334fa517533845eaa6c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e4f6e0ec4884a24ba63420a92af01a0078d0b54eec4334fa517533845eaa6c01->leave($__internal_e4f6e0ec4884a24ba63420a92af01a0078d0b54eec4334fa517533845eaa6c01_prof);

        
        $__internal_a835b19ebebc8b65316a7f5cf1fec03850b9a9324ddf81bf05e998e3455372a8->leave($__internal_a835b19ebebc8b65316a7f5cf1fec03850b9a9324ddf81bf05e998e3455372a8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d0ccf0294073fd517838704f3e8b2c1646f3c343e8444bf7d2fa300eba3ccae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0ccf0294073fd517838704f3e8b2c1646f3c343e8444bf7d2fa300eba3ccae->enter($__internal_1d0ccf0294073fd517838704f3e8b2c1646f3c343e8444bf7d2fa300eba3ccae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_72ee33a7b01b4aeabd689ce4a20f79d859b7e5fa6b11b88a3a44d29ad79513cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ee33a7b01b4aeabd689ce4a20f79d859b7e5fa6b11b88a3a44d29ad79513cf->enter($__internal_72ee33a7b01b4aeabd689ce4a20f79d859b7e5fa6b11b88a3a44d29ad79513cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_72ee33a7b01b4aeabd689ce4a20f79d859b7e5fa6b11b88a3a44d29ad79513cf->leave($__internal_72ee33a7b01b4aeabd689ce4a20f79d859b7e5fa6b11b88a3a44d29ad79513cf_prof);

        
        $__internal_1d0ccf0294073fd517838704f3e8b2c1646f3c343e8444bf7d2fa300eba3ccae->leave($__internal_1d0ccf0294073fd517838704f3e8b2c1646f3c343e8444bf7d2fa300eba3ccae_prof);

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
