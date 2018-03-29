<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c87710f357776402c9631da4bda3850b78ef8adca6273d8bd36cbe5e2fe827f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_7aba90c856d66a0245164eaaa44b96301e290e332fec10d31b268d8cc8c1b593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aba90c856d66a0245164eaaa44b96301e290e332fec10d31b268d8cc8c1b593->enter($__internal_7aba90c856d66a0245164eaaa44b96301e290e332fec10d31b268d8cc8c1b593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5bd04b3dacd80d479c665b1c66f27d8123693fb69a040fe2218eccb252f7ce65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd04b3dacd80d479c665b1c66f27d8123693fb69a040fe2218eccb252f7ce65->enter($__internal_5bd04b3dacd80d479c665b1c66f27d8123693fb69a040fe2218eccb252f7ce65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aba90c856d66a0245164eaaa44b96301e290e332fec10d31b268d8cc8c1b593->leave($__internal_7aba90c856d66a0245164eaaa44b96301e290e332fec10d31b268d8cc8c1b593_prof);

        
        $__internal_5bd04b3dacd80d479c665b1c66f27d8123693fb69a040fe2218eccb252f7ce65->leave($__internal_5bd04b3dacd80d479c665b1c66f27d8123693fb69a040fe2218eccb252f7ce65_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_88c09278601a04df76ae05eb94c9800d322e5e74cd52ef22581c68232744024d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c09278601a04df76ae05eb94c9800d322e5e74cd52ef22581c68232744024d->enter($__internal_88c09278601a04df76ae05eb94c9800d322e5e74cd52ef22581c68232744024d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eea59ab2567ca06f0873fb5b31fb35dd75b3ffc5934061827c2e7f55da4b3b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea59ab2567ca06f0873fb5b31fb35dd75b3ffc5934061827c2e7f55da4b3b56->enter($__internal_eea59ab2567ca06f0873fb5b31fb35dd75b3ffc5934061827c2e7f55da4b3b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_eea59ab2567ca06f0873fb5b31fb35dd75b3ffc5934061827c2e7f55da4b3b56->leave($__internal_eea59ab2567ca06f0873fb5b31fb35dd75b3ffc5934061827c2e7f55da4b3b56_prof);

        
        $__internal_88c09278601a04df76ae05eb94c9800d322e5e74cd52ef22581c68232744024d->leave($__internal_88c09278601a04df76ae05eb94c9800d322e5e74cd52ef22581c68232744024d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bd34f7e934406083ca07c1cce71d5c24d96e0ee2443b1fcd0b478259f5ed3f77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd34f7e934406083ca07c1cce71d5c24d96e0ee2443b1fcd0b478259f5ed3f77->enter($__internal_bd34f7e934406083ca07c1cce71d5c24d96e0ee2443b1fcd0b478259f5ed3f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5453fe53486bf8dc5dcc6cf6e4a2940faa6a8cea05ba52f35fdabbb1cc1fce88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5453fe53486bf8dc5dcc6cf6e4a2940faa6a8cea05ba52f35fdabbb1cc1fce88->enter($__internal_5453fe53486bf8dc5dcc6cf6e4a2940faa6a8cea05ba52f35fdabbb1cc1fce88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5453fe53486bf8dc5dcc6cf6e4a2940faa6a8cea05ba52f35fdabbb1cc1fce88->leave($__internal_5453fe53486bf8dc5dcc6cf6e4a2940faa6a8cea05ba52f35fdabbb1cc1fce88_prof);

        
        $__internal_bd34f7e934406083ca07c1cce71d5c24d96e0ee2443b1fcd0b478259f5ed3f77->leave($__internal_bd34f7e934406083ca07c1cce71d5c24d96e0ee2443b1fcd0b478259f5ed3f77_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39a19ff8fdca4bcc079e0d95f8bea75887edf39dd6dc1e3381aaa2143ff7ea9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a19ff8fdca4bcc079e0d95f8bea75887edf39dd6dc1e3381aaa2143ff7ea9d->enter($__internal_39a19ff8fdca4bcc079e0d95f8bea75887edf39dd6dc1e3381aaa2143ff7ea9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_41424803dc7b07c4ca0d0b679916b3c3f25d3f438e95e252430247e23a898dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41424803dc7b07c4ca0d0b679916b3c3f25d3f438e95e252430247e23a898dce->enter($__internal_41424803dc7b07c4ca0d0b679916b3c3f25d3f438e95e252430247e23a898dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_41424803dc7b07c4ca0d0b679916b3c3f25d3f438e95e252430247e23a898dce->leave($__internal_41424803dc7b07c4ca0d0b679916b3c3f25d3f438e95e252430247e23a898dce_prof);

        
        $__internal_39a19ff8fdca4bcc079e0d95f8bea75887edf39dd6dc1e3381aaa2143ff7ea9d->leave($__internal_39a19ff8fdca4bcc079e0d95f8bea75887edf39dd6dc1e3381aaa2143ff7ea9d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
