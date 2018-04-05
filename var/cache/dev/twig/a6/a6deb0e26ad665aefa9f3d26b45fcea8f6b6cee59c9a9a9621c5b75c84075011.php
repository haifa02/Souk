<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ecdbac7d977bcaad8b01522eee9fd018caec35d5947c244bf801802f4c7f1934 extends Twig_Template
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
        $__internal_ef74c72feb86ee08f2df90e7dca6232c8a8bdfa54a6a2b885c707723dd928685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef74c72feb86ee08f2df90e7dca6232c8a8bdfa54a6a2b885c707723dd928685->enter($__internal_ef74c72feb86ee08f2df90e7dca6232c8a8bdfa54a6a2b885c707723dd928685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_08d5b438bfdf3566dd1fc997ac0a25c7a8912111197ca71684860a564381cd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d5b438bfdf3566dd1fc997ac0a25c7a8912111197ca71684860a564381cd2c->enter($__internal_08d5b438bfdf3566dd1fc997ac0a25c7a8912111197ca71684860a564381cd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef74c72feb86ee08f2df90e7dca6232c8a8bdfa54a6a2b885c707723dd928685->leave($__internal_ef74c72feb86ee08f2df90e7dca6232c8a8bdfa54a6a2b885c707723dd928685_prof);

        
        $__internal_08d5b438bfdf3566dd1fc997ac0a25c7a8912111197ca71684860a564381cd2c->leave($__internal_08d5b438bfdf3566dd1fc997ac0a25c7a8912111197ca71684860a564381cd2c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2c6d53aa089428933c3a2e75053ba824df31d7a3c12cfdc1d88be15d0106b792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6d53aa089428933c3a2e75053ba824df31d7a3c12cfdc1d88be15d0106b792->enter($__internal_2c6d53aa089428933c3a2e75053ba824df31d7a3c12cfdc1d88be15d0106b792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fdb30215176eaa3599e0f69ed68ac2e52e987eef6f1cdacce4d97420d9c55c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb30215176eaa3599e0f69ed68ac2e52e987eef6f1cdacce4d97420d9c55c3e->enter($__internal_fdb30215176eaa3599e0f69ed68ac2e52e987eef6f1cdacce4d97420d9c55c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fdb30215176eaa3599e0f69ed68ac2e52e987eef6f1cdacce4d97420d9c55c3e->leave($__internal_fdb30215176eaa3599e0f69ed68ac2e52e987eef6f1cdacce4d97420d9c55c3e_prof);

        
        $__internal_2c6d53aa089428933c3a2e75053ba824df31d7a3c12cfdc1d88be15d0106b792->leave($__internal_2c6d53aa089428933c3a2e75053ba824df31d7a3c12cfdc1d88be15d0106b792_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0fba6c560517a9b92c5387345d80f2b61458e16653e7f1d21610f6a562be141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0fba6c560517a9b92c5387345d80f2b61458e16653e7f1d21610f6a562be141->enter($__internal_b0fba6c560517a9b92c5387345d80f2b61458e16653e7f1d21610f6a562be141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_395bb428054d8317ced48a1a6ba596d31546da62a4bac9a7dccd903175dfb855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395bb428054d8317ced48a1a6ba596d31546da62a4bac9a7dccd903175dfb855->enter($__internal_395bb428054d8317ced48a1a6ba596d31546da62a4bac9a7dccd903175dfb855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_395bb428054d8317ced48a1a6ba596d31546da62a4bac9a7dccd903175dfb855->leave($__internal_395bb428054d8317ced48a1a6ba596d31546da62a4bac9a7dccd903175dfb855_prof);

        
        $__internal_b0fba6c560517a9b92c5387345d80f2b61458e16653e7f1d21610f6a562be141->leave($__internal_b0fba6c560517a9b92c5387345d80f2b61458e16653e7f1d21610f6a562be141_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_11bc49ea28332be49d6b357dde6a1679098babb47fbce1ccc9fb087bf7dfe472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11bc49ea28332be49d6b357dde6a1679098babb47fbce1ccc9fb087bf7dfe472->enter($__internal_11bc49ea28332be49d6b357dde6a1679098babb47fbce1ccc9fb087bf7dfe472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fb38fbfa052a85d8b3926d65eab000440eac4668ea219fa2a2504ef62410eedd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb38fbfa052a85d8b3926d65eab000440eac4668ea219fa2a2504ef62410eedd->enter($__internal_fb38fbfa052a85d8b3926d65eab000440eac4668ea219fa2a2504ef62410eedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fb38fbfa052a85d8b3926d65eab000440eac4668ea219fa2a2504ef62410eedd->leave($__internal_fb38fbfa052a85d8b3926d65eab000440eac4668ea219fa2a2504ef62410eedd_prof);

        
        $__internal_11bc49ea28332be49d6b357dde6a1679098babb47fbce1ccc9fb087bf7dfe472->leave($__internal_11bc49ea28332be49d6b357dde6a1679098babb47fbce1ccc9fb087bf7dfe472_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
