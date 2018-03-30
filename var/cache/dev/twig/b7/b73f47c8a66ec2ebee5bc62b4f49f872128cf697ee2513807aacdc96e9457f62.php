<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c90c635dc75b7be14e501a18a88de31e1da2920e2104a84ee79128cd18df06ce extends Twig_Template
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
        $__internal_5f90f2ef3b4d53ee1b7bcdfaae5ae0fafdbd58d255ffaaf92d85e0b1341be572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f90f2ef3b4d53ee1b7bcdfaae5ae0fafdbd58d255ffaaf92d85e0b1341be572->enter($__internal_5f90f2ef3b4d53ee1b7bcdfaae5ae0fafdbd58d255ffaaf92d85e0b1341be572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b18341bf4c4fcdaaece0197bce148544cc5f18b9ffc286fc7ef2288e183151b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18341bf4c4fcdaaece0197bce148544cc5f18b9ffc286fc7ef2288e183151b5->enter($__internal_b18341bf4c4fcdaaece0197bce148544cc5f18b9ffc286fc7ef2288e183151b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f90f2ef3b4d53ee1b7bcdfaae5ae0fafdbd58d255ffaaf92d85e0b1341be572->leave($__internal_5f90f2ef3b4d53ee1b7bcdfaae5ae0fafdbd58d255ffaaf92d85e0b1341be572_prof);

        
        $__internal_b18341bf4c4fcdaaece0197bce148544cc5f18b9ffc286fc7ef2288e183151b5->leave($__internal_b18341bf4c4fcdaaece0197bce148544cc5f18b9ffc286fc7ef2288e183151b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_102826aa2e47655e0873ae181b91ba2cc5d5f22bb20987fa20e13cf72b63e74e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_102826aa2e47655e0873ae181b91ba2cc5d5f22bb20987fa20e13cf72b63e74e->enter($__internal_102826aa2e47655e0873ae181b91ba2cc5d5f22bb20987fa20e13cf72b63e74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_451f1b201315c8582212be063fa14334bbc4fd85c41a307ce512d004b46a63c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451f1b201315c8582212be063fa14334bbc4fd85c41a307ce512d004b46a63c5->enter($__internal_451f1b201315c8582212be063fa14334bbc4fd85c41a307ce512d004b46a63c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_451f1b201315c8582212be063fa14334bbc4fd85c41a307ce512d004b46a63c5->leave($__internal_451f1b201315c8582212be063fa14334bbc4fd85c41a307ce512d004b46a63c5_prof);

        
        $__internal_102826aa2e47655e0873ae181b91ba2cc5d5f22bb20987fa20e13cf72b63e74e->leave($__internal_102826aa2e47655e0873ae181b91ba2cc5d5f22bb20987fa20e13cf72b63e74e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_113c62d047e4357ca03b8812cc87a503e935e3b7ca0865a392ff8c51253ed972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113c62d047e4357ca03b8812cc87a503e935e3b7ca0865a392ff8c51253ed972->enter($__internal_113c62d047e4357ca03b8812cc87a503e935e3b7ca0865a392ff8c51253ed972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2f65052ccdf9394ecce26b9ef6f9ff8c6031d2dba8f4f8872307e333db376df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f65052ccdf9394ecce26b9ef6f9ff8c6031d2dba8f4f8872307e333db376df1->enter($__internal_2f65052ccdf9394ecce26b9ef6f9ff8c6031d2dba8f4f8872307e333db376df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2f65052ccdf9394ecce26b9ef6f9ff8c6031d2dba8f4f8872307e333db376df1->leave($__internal_2f65052ccdf9394ecce26b9ef6f9ff8c6031d2dba8f4f8872307e333db376df1_prof);

        
        $__internal_113c62d047e4357ca03b8812cc87a503e935e3b7ca0865a392ff8c51253ed972->leave($__internal_113c62d047e4357ca03b8812cc87a503e935e3b7ca0865a392ff8c51253ed972_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_10e3f43d9c44b5cd058e9030af0941f8f66db93615e56ea2d3d47fd2c4dd2481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e3f43d9c44b5cd058e9030af0941f8f66db93615e56ea2d3d47fd2c4dd2481->enter($__internal_10e3f43d9c44b5cd058e9030af0941f8f66db93615e56ea2d3d47fd2c4dd2481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c9ab1b41d2ef581e678ee7508215d068b472ce82e0e48d48c515bc544fcbc568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ab1b41d2ef581e678ee7508215d068b472ce82e0e48d48c515bc544fcbc568->enter($__internal_c9ab1b41d2ef581e678ee7508215d068b472ce82e0e48d48c515bc544fcbc568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c9ab1b41d2ef581e678ee7508215d068b472ce82e0e48d48c515bc544fcbc568->leave($__internal_c9ab1b41d2ef581e678ee7508215d068b472ce82e0e48d48c515bc544fcbc568_prof);

        
        $__internal_10e3f43d9c44b5cd058e9030af0941f8f66db93615e56ea2d3d47fd2c4dd2481->leave($__internal_10e3f43d9c44b5cd058e9030af0941f8f66db93615e56ea2d3d47fd2c4dd2481_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Boufares\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
