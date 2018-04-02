<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ce5e298ea7c566ba912d0cb4d5695f690b63e95c6189996a45de6c3ac1516709 extends Twig_Template
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
        $__internal_a2199291dc46f978648a4d112f936ca54457c80843cbb22d6e764f44392493e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2199291dc46f978648a4d112f936ca54457c80843cbb22d6e764f44392493e2->enter($__internal_a2199291dc46f978648a4d112f936ca54457c80843cbb22d6e764f44392493e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_739d1e492c4868b49d8cbb50206a1f68a7f0a5fd8af1867b8eae86e6ab1f2fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739d1e492c4868b49d8cbb50206a1f68a7f0a5fd8af1867b8eae86e6ab1f2fdd->enter($__internal_739d1e492c4868b49d8cbb50206a1f68a7f0a5fd8af1867b8eae86e6ab1f2fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2199291dc46f978648a4d112f936ca54457c80843cbb22d6e764f44392493e2->leave($__internal_a2199291dc46f978648a4d112f936ca54457c80843cbb22d6e764f44392493e2_prof);

        
        $__internal_739d1e492c4868b49d8cbb50206a1f68a7f0a5fd8af1867b8eae86e6ab1f2fdd->leave($__internal_739d1e492c4868b49d8cbb50206a1f68a7f0a5fd8af1867b8eae86e6ab1f2fdd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f914abbb639012e34b2079eca538380ed45f19088f19cf18d960cb81c5beec9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f914abbb639012e34b2079eca538380ed45f19088f19cf18d960cb81c5beec9f->enter($__internal_f914abbb639012e34b2079eca538380ed45f19088f19cf18d960cb81c5beec9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_42c9bc1753b558a87d1b4dc65c4c1ec5746dcc9b6a1228a103fd6b73f64008cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c9bc1753b558a87d1b4dc65c4c1ec5746dcc9b6a1228a103fd6b73f64008cf->enter($__internal_42c9bc1753b558a87d1b4dc65c4c1ec5746dcc9b6a1228a103fd6b73f64008cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_42c9bc1753b558a87d1b4dc65c4c1ec5746dcc9b6a1228a103fd6b73f64008cf->leave($__internal_42c9bc1753b558a87d1b4dc65c4c1ec5746dcc9b6a1228a103fd6b73f64008cf_prof);

        
        $__internal_f914abbb639012e34b2079eca538380ed45f19088f19cf18d960cb81c5beec9f->leave($__internal_f914abbb639012e34b2079eca538380ed45f19088f19cf18d960cb81c5beec9f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b9e73c87b7dcaae34fcdfda52d95cabd264f32d5615acae229a5ba1f78d64cda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e73c87b7dcaae34fcdfda52d95cabd264f32d5615acae229a5ba1f78d64cda->enter($__internal_b9e73c87b7dcaae34fcdfda52d95cabd264f32d5615acae229a5ba1f78d64cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a299f0038f371dba97f2b9f974811107a36eb6d92df1c45bd0a54d271c4a9af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a299f0038f371dba97f2b9f974811107a36eb6d92df1c45bd0a54d271c4a9af1->enter($__internal_a299f0038f371dba97f2b9f974811107a36eb6d92df1c45bd0a54d271c4a9af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a299f0038f371dba97f2b9f974811107a36eb6d92df1c45bd0a54d271c4a9af1->leave($__internal_a299f0038f371dba97f2b9f974811107a36eb6d92df1c45bd0a54d271c4a9af1_prof);

        
        $__internal_b9e73c87b7dcaae34fcdfda52d95cabd264f32d5615acae229a5ba1f78d64cda->leave($__internal_b9e73c87b7dcaae34fcdfda52d95cabd264f32d5615acae229a5ba1f78d64cda_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0ac0c05b0bb9d664b51d0a1ea4a8ab3d58684c41710c77b3255bdff29d69ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ac0c05b0bb9d664b51d0a1ea4a8ab3d58684c41710c77b3255bdff29d69ac2->enter($__internal_e0ac0c05b0bb9d664b51d0a1ea4a8ab3d58684c41710c77b3255bdff29d69ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_29bbbf4eff665b4ba651985d1cf601efc620cf5d49685c5ad5532afae9f6a347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29bbbf4eff665b4ba651985d1cf601efc620cf5d49685c5ad5532afae9f6a347->enter($__internal_29bbbf4eff665b4ba651985d1cf601efc620cf5d49685c5ad5532afae9f6a347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_29bbbf4eff665b4ba651985d1cf601efc620cf5d49685c5ad5532afae9f6a347->leave($__internal_29bbbf4eff665b4ba651985d1cf601efc620cf5d49685c5ad5532afae9f6a347_prof);

        
        $__internal_e0ac0c05b0bb9d664b51d0a1ea4a8ab3d58684c41710c77b3255bdff29d69ac2->leave($__internal_e0ac0c05b0bb9d664b51d0a1ea4a8ab3d58684c41710c77b3255bdff29d69ac2_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
