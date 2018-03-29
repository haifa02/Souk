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
        $__internal_2201a7ce8fcd520f3986bd28fec36125bd57bb9a7430560ef7832f7bbe94b916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2201a7ce8fcd520f3986bd28fec36125bd57bb9a7430560ef7832f7bbe94b916->enter($__internal_2201a7ce8fcd520f3986bd28fec36125bd57bb9a7430560ef7832f7bbe94b916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_787954c1dac456616d0b37318295f1e30dd8c0a18a4b5fb91dbf13078d136894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787954c1dac456616d0b37318295f1e30dd8c0a18a4b5fb91dbf13078d136894->enter($__internal_787954c1dac456616d0b37318295f1e30dd8c0a18a4b5fb91dbf13078d136894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2201a7ce8fcd520f3986bd28fec36125bd57bb9a7430560ef7832f7bbe94b916->leave($__internal_2201a7ce8fcd520f3986bd28fec36125bd57bb9a7430560ef7832f7bbe94b916_prof);

        
        $__internal_787954c1dac456616d0b37318295f1e30dd8c0a18a4b5fb91dbf13078d136894->leave($__internal_787954c1dac456616d0b37318295f1e30dd8c0a18a4b5fb91dbf13078d136894_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d298d4eafe949d560ef35a0cfc89760bc29805d26b8f92fd0b0cc40138cb6f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d298d4eafe949d560ef35a0cfc89760bc29805d26b8f92fd0b0cc40138cb6f46->enter($__internal_d298d4eafe949d560ef35a0cfc89760bc29805d26b8f92fd0b0cc40138cb6f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b46ef9fab95a5d29b4a7b6e034894aec093706e0c778904d4c0868341f1e0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b46ef9fab95a5d29b4a7b6e034894aec093706e0c778904d4c0868341f1e0ed->enter($__internal_7b46ef9fab95a5d29b4a7b6e034894aec093706e0c778904d4c0868341f1e0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7b46ef9fab95a5d29b4a7b6e034894aec093706e0c778904d4c0868341f1e0ed->leave($__internal_7b46ef9fab95a5d29b4a7b6e034894aec093706e0c778904d4c0868341f1e0ed_prof);

        
        $__internal_d298d4eafe949d560ef35a0cfc89760bc29805d26b8f92fd0b0cc40138cb6f46->leave($__internal_d298d4eafe949d560ef35a0cfc89760bc29805d26b8f92fd0b0cc40138cb6f46_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d1ccde02d6bce37daee3fe78f729305e5e4a6cea18eac7345d362d5f28b28e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1ccde02d6bce37daee3fe78f729305e5e4a6cea18eac7345d362d5f28b28e4->enter($__internal_0d1ccde02d6bce37daee3fe78f729305e5e4a6cea18eac7345d362d5f28b28e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fc67dab5f633d366177575625e4188727f77c4f49080500a53b5e8144a2903e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc67dab5f633d366177575625e4188727f77c4f49080500a53b5e8144a2903e5->enter($__internal_fc67dab5f633d366177575625e4188727f77c4f49080500a53b5e8144a2903e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fc67dab5f633d366177575625e4188727f77c4f49080500a53b5e8144a2903e5->leave($__internal_fc67dab5f633d366177575625e4188727f77c4f49080500a53b5e8144a2903e5_prof);

        
        $__internal_0d1ccde02d6bce37daee3fe78f729305e5e4a6cea18eac7345d362d5f28b28e4->leave($__internal_0d1ccde02d6bce37daee3fe78f729305e5e4a6cea18eac7345d362d5f28b28e4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e205c025a8e7638406fe0943cf7f982c4d7732eccd7dce547d0e7d0584b4e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e205c025a8e7638406fe0943cf7f982c4d7732eccd7dce547d0e7d0584b4e0e->enter($__internal_2e205c025a8e7638406fe0943cf7f982c4d7732eccd7dce547d0e7d0584b4e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2512c80562a5f09f8e6590b8da647db30308a4c607a5c6891c14bd2c36b2f260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2512c80562a5f09f8e6590b8da647db30308a4c607a5c6891c14bd2c36b2f260->enter($__internal_2512c80562a5f09f8e6590b8da647db30308a4c607a5c6891c14bd2c36b2f260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2512c80562a5f09f8e6590b8da647db30308a4c607a5c6891c14bd2c36b2f260->leave($__internal_2512c80562a5f09f8e6590b8da647db30308a4c607a5c6891c14bd2c36b2f260_prof);

        
        $__internal_2e205c025a8e7638406fe0943cf7f982c4d7732eccd7dce547d0e7d0584b4e0e->leave($__internal_2e205c025a8e7638406fe0943cf7f982c4d7732eccd7dce547d0e7d0584b4e0e_prof);

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
