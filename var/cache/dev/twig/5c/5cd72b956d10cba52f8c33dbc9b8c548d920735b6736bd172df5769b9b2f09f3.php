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
        $__internal_bda87d1c8f1ec50f5fdb729c87df2888910facd2b036eec1b4a2cbfde103993f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bda87d1c8f1ec50f5fdb729c87df2888910facd2b036eec1b4a2cbfde103993f->enter($__internal_bda87d1c8f1ec50f5fdb729c87df2888910facd2b036eec1b4a2cbfde103993f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8c8ae8115ecda448a53efd44a734aca5e537bde1e4fc0c04175a2ba0e9328436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8ae8115ecda448a53efd44a734aca5e537bde1e4fc0c04175a2ba0e9328436->enter($__internal_8c8ae8115ecda448a53efd44a734aca5e537bde1e4fc0c04175a2ba0e9328436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bda87d1c8f1ec50f5fdb729c87df2888910facd2b036eec1b4a2cbfde103993f->leave($__internal_bda87d1c8f1ec50f5fdb729c87df2888910facd2b036eec1b4a2cbfde103993f_prof);

        
        $__internal_8c8ae8115ecda448a53efd44a734aca5e537bde1e4fc0c04175a2ba0e9328436->leave($__internal_8c8ae8115ecda448a53efd44a734aca5e537bde1e4fc0c04175a2ba0e9328436_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_abae78d62d93b84f140faf2dc5450114997661669799f6c5356baa9894bca590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abae78d62d93b84f140faf2dc5450114997661669799f6c5356baa9894bca590->enter($__internal_abae78d62d93b84f140faf2dc5450114997661669799f6c5356baa9894bca590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0b276e795f9ff60865e775b4592d8a979bf26c894345799f416e716d4db14fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b276e795f9ff60865e775b4592d8a979bf26c894345799f416e716d4db14fe5->enter($__internal_0b276e795f9ff60865e775b4592d8a979bf26c894345799f416e716d4db14fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0b276e795f9ff60865e775b4592d8a979bf26c894345799f416e716d4db14fe5->leave($__internal_0b276e795f9ff60865e775b4592d8a979bf26c894345799f416e716d4db14fe5_prof);

        
        $__internal_abae78d62d93b84f140faf2dc5450114997661669799f6c5356baa9894bca590->leave($__internal_abae78d62d93b84f140faf2dc5450114997661669799f6c5356baa9894bca590_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b81130e1643342b8e16ed2dd640ab147ba74638b206bce1df8815438cbddb34f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b81130e1643342b8e16ed2dd640ab147ba74638b206bce1df8815438cbddb34f->enter($__internal_b81130e1643342b8e16ed2dd640ab147ba74638b206bce1df8815438cbddb34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_31dbca59576620e64fd30821e5ba011c165b8264f45ad109bc6d16339e687757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dbca59576620e64fd30821e5ba011c165b8264f45ad109bc6d16339e687757->enter($__internal_31dbca59576620e64fd30821e5ba011c165b8264f45ad109bc6d16339e687757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_31dbca59576620e64fd30821e5ba011c165b8264f45ad109bc6d16339e687757->leave($__internal_31dbca59576620e64fd30821e5ba011c165b8264f45ad109bc6d16339e687757_prof);

        
        $__internal_b81130e1643342b8e16ed2dd640ab147ba74638b206bce1df8815438cbddb34f->leave($__internal_b81130e1643342b8e16ed2dd640ab147ba74638b206bce1df8815438cbddb34f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d30b4c4848346c968c1465e06c23fed1d2f70c3fc86b2afb76c9cb000188580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d30b4c4848346c968c1465e06c23fed1d2f70c3fc86b2afb76c9cb000188580->enter($__internal_3d30b4c4848346c968c1465e06c23fed1d2f70c3fc86b2afb76c9cb000188580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aaace1d81ffccec47fcc6815e6988a971fcaa70143c9a636aad839a7cab0cd21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaace1d81ffccec47fcc6815e6988a971fcaa70143c9a636aad839a7cab0cd21->enter($__internal_aaace1d81ffccec47fcc6815e6988a971fcaa70143c9a636aad839a7cab0cd21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aaace1d81ffccec47fcc6815e6988a971fcaa70143c9a636aad839a7cab0cd21->leave($__internal_aaace1d81ffccec47fcc6815e6988a971fcaa70143c9a636aad839a7cab0cd21_prof);

        
        $__internal_3d30b4c4848346c968c1465e06c23fed1d2f70c3fc86b2afb76c9cb000188580->leave($__internal_3d30b4c4848346c968c1465e06c23fed1d2f70c3fc86b2afb76c9cb000188580_prof);

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
