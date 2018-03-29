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
        $__internal_0c46b2e4ed4d04c9b7cfda13590e584c2bea9008ab05a6495f06cc7b88c1c163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c46b2e4ed4d04c9b7cfda13590e584c2bea9008ab05a6495f06cc7b88c1c163->enter($__internal_0c46b2e4ed4d04c9b7cfda13590e584c2bea9008ab05a6495f06cc7b88c1c163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_027ea09174f9139627bdd8ddcae2c629ae815c8bcda7db0a8cdf04663bcabb24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027ea09174f9139627bdd8ddcae2c629ae815c8bcda7db0a8cdf04663bcabb24->enter($__internal_027ea09174f9139627bdd8ddcae2c629ae815c8bcda7db0a8cdf04663bcabb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c46b2e4ed4d04c9b7cfda13590e584c2bea9008ab05a6495f06cc7b88c1c163->leave($__internal_0c46b2e4ed4d04c9b7cfda13590e584c2bea9008ab05a6495f06cc7b88c1c163_prof);

        
        $__internal_027ea09174f9139627bdd8ddcae2c629ae815c8bcda7db0a8cdf04663bcabb24->leave($__internal_027ea09174f9139627bdd8ddcae2c629ae815c8bcda7db0a8cdf04663bcabb24_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6eca68c95f7b328c1c660c98545981c73d5b648c9d17e2c3d60450edffccd560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eca68c95f7b328c1c660c98545981c73d5b648c9d17e2c3d60450edffccd560->enter($__internal_6eca68c95f7b328c1c660c98545981c73d5b648c9d17e2c3d60450edffccd560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_84faced30dbaa57ea7f527e9ab1179eb4a07eb87acd89b0570963440c6e10643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84faced30dbaa57ea7f527e9ab1179eb4a07eb87acd89b0570963440c6e10643->enter($__internal_84faced30dbaa57ea7f527e9ab1179eb4a07eb87acd89b0570963440c6e10643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_84faced30dbaa57ea7f527e9ab1179eb4a07eb87acd89b0570963440c6e10643->leave($__internal_84faced30dbaa57ea7f527e9ab1179eb4a07eb87acd89b0570963440c6e10643_prof);

        
        $__internal_6eca68c95f7b328c1c660c98545981c73d5b648c9d17e2c3d60450edffccd560->leave($__internal_6eca68c95f7b328c1c660c98545981c73d5b648c9d17e2c3d60450edffccd560_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7089dd4d6a1e2513648ae09da661f40c24d20f692465b120d2b4dd86c8f102d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7089dd4d6a1e2513648ae09da661f40c24d20f692465b120d2b4dd86c8f102d->enter($__internal_d7089dd4d6a1e2513648ae09da661f40c24d20f692465b120d2b4dd86c8f102d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5d776b6ab514a67c8cf039fb2a7703fd043b299d77b707824a52da3345f6f694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d776b6ab514a67c8cf039fb2a7703fd043b299d77b707824a52da3345f6f694->enter($__internal_5d776b6ab514a67c8cf039fb2a7703fd043b299d77b707824a52da3345f6f694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d776b6ab514a67c8cf039fb2a7703fd043b299d77b707824a52da3345f6f694->leave($__internal_5d776b6ab514a67c8cf039fb2a7703fd043b299d77b707824a52da3345f6f694_prof);

        
        $__internal_d7089dd4d6a1e2513648ae09da661f40c24d20f692465b120d2b4dd86c8f102d->leave($__internal_d7089dd4d6a1e2513648ae09da661f40c24d20f692465b120d2b4dd86c8f102d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd9cc07325a291876a411444893568f56f76ab081cc93398ace1fc802454c200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9cc07325a291876a411444893568f56f76ab081cc93398ace1fc802454c200->enter($__internal_dd9cc07325a291876a411444893568f56f76ab081cc93398ace1fc802454c200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_26050c10294edcc34d9cecb9b074811300636c822a05bcee70632a5da80ca5d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26050c10294edcc34d9cecb9b074811300636c822a05bcee70632a5da80ca5d6->enter($__internal_26050c10294edcc34d9cecb9b074811300636c822a05bcee70632a5da80ca5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_26050c10294edcc34d9cecb9b074811300636c822a05bcee70632a5da80ca5d6->leave($__internal_26050c10294edcc34d9cecb9b074811300636c822a05bcee70632a5da80ca5d6_prof);

        
        $__internal_dd9cc07325a291876a411444893568f56f76ab081cc93398ace1fc802454c200->leave($__internal_dd9cc07325a291876a411444893568f56f76ab081cc93398ace1fc802454c200_prof);

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
