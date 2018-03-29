<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_60d323e41511724e9a0795bfebea260f337c41c0c6ad284d1e6b781ac0094084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_deccfdc32c3fe4614cb943ff507301217b5e6c62fad68c4dd7390062fde366d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deccfdc32c3fe4614cb943ff507301217b5e6c62fad68c4dd7390062fde366d2->enter($__internal_deccfdc32c3fe4614cb943ff507301217b5e6c62fad68c4dd7390062fde366d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9242a431a996cdfff0d316c6b439ccf6732b60ecd889802b13ceabfbcc0e301e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9242a431a996cdfff0d316c6b439ccf6732b60ecd889802b13ceabfbcc0e301e->enter($__internal_9242a431a996cdfff0d316c6b439ccf6732b60ecd889802b13ceabfbcc0e301e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deccfdc32c3fe4614cb943ff507301217b5e6c62fad68c4dd7390062fde366d2->leave($__internal_deccfdc32c3fe4614cb943ff507301217b5e6c62fad68c4dd7390062fde366d2_prof);

        
        $__internal_9242a431a996cdfff0d316c6b439ccf6732b60ecd889802b13ceabfbcc0e301e->leave($__internal_9242a431a996cdfff0d316c6b439ccf6732b60ecd889802b13ceabfbcc0e301e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b7925114caba1a1924ad7a4192fc279b88bfb1e051eb0aae8b2be5136210b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7925114caba1a1924ad7a4192fc279b88bfb1e051eb0aae8b2be5136210b6e->enter($__internal_9b7925114caba1a1924ad7a4192fc279b88bfb1e051eb0aae8b2be5136210b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3e53818d288356f7510f649db59e2cf551d10a40cba897dce8ba5f02ace4dab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e53818d288356f7510f649db59e2cf551d10a40cba897dce8ba5f02ace4dab3->enter($__internal_3e53818d288356f7510f649db59e2cf551d10a40cba897dce8ba5f02ace4dab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3e53818d288356f7510f649db59e2cf551d10a40cba897dce8ba5f02ace4dab3->leave($__internal_3e53818d288356f7510f649db59e2cf551d10a40cba897dce8ba5f02ace4dab3_prof);

        
        $__internal_9b7925114caba1a1924ad7a4192fc279b88bfb1e051eb0aae8b2be5136210b6e->leave($__internal_9b7925114caba1a1924ad7a4192fc279b88bfb1e051eb0aae8b2be5136210b6e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc5c28e447dfdfb0916d65ddf8ac74eb3309eda851545e975bb68ec7a9019b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5c28e447dfdfb0916d65ddf8ac74eb3309eda851545e975bb68ec7a9019b76->enter($__internal_bc5c28e447dfdfb0916d65ddf8ac74eb3309eda851545e975bb68ec7a9019b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e6ad2db2fdd149df0b017d8eb84b689aa02527d93740a9b21cb2498bd9dabd42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ad2db2fdd149df0b017d8eb84b689aa02527d93740a9b21cb2498bd9dabd42->enter($__internal_e6ad2db2fdd149df0b017d8eb84b689aa02527d93740a9b21cb2498bd9dabd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e6ad2db2fdd149df0b017d8eb84b689aa02527d93740a9b21cb2498bd9dabd42->leave($__internal_e6ad2db2fdd149df0b017d8eb84b689aa02527d93740a9b21cb2498bd9dabd42_prof);

        
        $__internal_bc5c28e447dfdfb0916d65ddf8ac74eb3309eda851545e975bb68ec7a9019b76->leave($__internal_bc5c28e447dfdfb0916d65ddf8ac74eb3309eda851545e975bb68ec7a9019b76_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_657b86c2bec803e9bbee3d62fd4e4837b653faeb35485ca42e26011199c30ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657b86c2bec803e9bbee3d62fd4e4837b653faeb35485ca42e26011199c30ea5->enter($__internal_657b86c2bec803e9bbee3d62fd4e4837b653faeb35485ca42e26011199c30ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6976988f6554dc38b1b812f87bd2e07f44598386a0dc9a4407384c434877b7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6976988f6554dc38b1b812f87bd2e07f44598386a0dc9a4407384c434877b7f2->enter($__internal_6976988f6554dc38b1b812f87bd2e07f44598386a0dc9a4407384c434877b7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6976988f6554dc38b1b812f87bd2e07f44598386a0dc9a4407384c434877b7f2->leave($__internal_6976988f6554dc38b1b812f87bd2e07f44598386a0dc9a4407384c434877b7f2_prof);

        
        $__internal_657b86c2bec803e9bbee3d62fd4e4837b653faeb35485ca42e26011199c30ea5->leave($__internal_657b86c2bec803e9bbee3d62fd4e4837b653faeb35485ca42e26011199c30ea5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
