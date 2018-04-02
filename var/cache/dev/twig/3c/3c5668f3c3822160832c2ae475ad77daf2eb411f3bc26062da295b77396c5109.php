<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7feb8c90ea24daa984860a69ec31cad09d316804d573ff841303c214d1391fc0 extends Twig_Template
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
        $__internal_27f2791976ed997a574567caf808cc04a69ff9f65f1808b2c72763f016c47343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f2791976ed997a574567caf808cc04a69ff9f65f1808b2c72763f016c47343->enter($__internal_27f2791976ed997a574567caf808cc04a69ff9f65f1808b2c72763f016c47343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2ee5c697a9543634b763fec3c1f167c9cb1fb67f2e11b5a55dcd5a293716a07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee5c697a9543634b763fec3c1f167c9cb1fb67f2e11b5a55dcd5a293716a07d->enter($__internal_2ee5c697a9543634b763fec3c1f167c9cb1fb67f2e11b5a55dcd5a293716a07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27f2791976ed997a574567caf808cc04a69ff9f65f1808b2c72763f016c47343->leave($__internal_27f2791976ed997a574567caf808cc04a69ff9f65f1808b2c72763f016c47343_prof);

        
        $__internal_2ee5c697a9543634b763fec3c1f167c9cb1fb67f2e11b5a55dcd5a293716a07d->leave($__internal_2ee5c697a9543634b763fec3c1f167c9cb1fb67f2e11b5a55dcd5a293716a07d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_52bbcd8a59e83de82ba8c27a7db1213b26292e83105baa28733cfd916e88bb97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52bbcd8a59e83de82ba8c27a7db1213b26292e83105baa28733cfd916e88bb97->enter($__internal_52bbcd8a59e83de82ba8c27a7db1213b26292e83105baa28733cfd916e88bb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_72d7b588656118e9b05fa2b6edf39560b0ab37117e50fbfa11856938afc2832a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d7b588656118e9b05fa2b6edf39560b0ab37117e50fbfa11856938afc2832a->enter($__internal_72d7b588656118e9b05fa2b6edf39560b0ab37117e50fbfa11856938afc2832a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72d7b588656118e9b05fa2b6edf39560b0ab37117e50fbfa11856938afc2832a->leave($__internal_72d7b588656118e9b05fa2b6edf39560b0ab37117e50fbfa11856938afc2832a_prof);

        
        $__internal_52bbcd8a59e83de82ba8c27a7db1213b26292e83105baa28733cfd916e88bb97->leave($__internal_52bbcd8a59e83de82ba8c27a7db1213b26292e83105baa28733cfd916e88bb97_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43fa0a4d467c3b7b534a153f5a7ee166434d669c068faf330b5da1854e9a9e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43fa0a4d467c3b7b534a153f5a7ee166434d669c068faf330b5da1854e9a9e57->enter($__internal_43fa0a4d467c3b7b534a153f5a7ee166434d669c068faf330b5da1854e9a9e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ef5e5d729f2098a48037d3caeca6286e81e647705feacceaf1e757d679d593d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5e5d729f2098a48037d3caeca6286e81e647705feacceaf1e757d679d593d3->enter($__internal_ef5e5d729f2098a48037d3caeca6286e81e647705feacceaf1e757d679d593d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ef5e5d729f2098a48037d3caeca6286e81e647705feacceaf1e757d679d593d3->leave($__internal_ef5e5d729f2098a48037d3caeca6286e81e647705feacceaf1e757d679d593d3_prof);

        
        $__internal_43fa0a4d467c3b7b534a153f5a7ee166434d669c068faf330b5da1854e9a9e57->leave($__internal_43fa0a4d467c3b7b534a153f5a7ee166434d669c068faf330b5da1854e9a9e57_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_78aa12f630118910724b39d2f4a2609ec9e978bca05e870485811f429d321814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78aa12f630118910724b39d2f4a2609ec9e978bca05e870485811f429d321814->enter($__internal_78aa12f630118910724b39d2f4a2609ec9e978bca05e870485811f429d321814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_25ec14d567e2b9bf928b8cdfa2d760b94a74d6761de9c65d2425294083ad23ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ec14d567e2b9bf928b8cdfa2d760b94a74d6761de9c65d2425294083ad23ba->enter($__internal_25ec14d567e2b9bf928b8cdfa2d760b94a74d6761de9c65d2425294083ad23ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_25ec14d567e2b9bf928b8cdfa2d760b94a74d6761de9c65d2425294083ad23ba->leave($__internal_25ec14d567e2b9bf928b8cdfa2d760b94a74d6761de9c65d2425294083ad23ba_prof);

        
        $__internal_78aa12f630118910724b39d2f4a2609ec9e978bca05e870485811f429d321814->leave($__internal_78aa12f630118910724b39d2f4a2609ec9e978bca05e870485811f429d321814_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\salsa\\OneDrive\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
