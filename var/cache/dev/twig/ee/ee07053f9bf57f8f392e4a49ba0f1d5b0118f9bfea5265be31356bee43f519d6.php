<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_93825f0c7238c4301ad41276fd1c63641f2734c0def4149794edf8f380ae0a93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a30c9f401cd21566cd20c61862a5e5817ac36fa66d3fdb708b31c49dd31d85a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a30c9f401cd21566cd20c61862a5e5817ac36fa66d3fdb708b31c49dd31d85a->enter($__internal_7a30c9f401cd21566cd20c61862a5e5817ac36fa66d3fdb708b31c49dd31d85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_55d8d71f0c0ceb7e3e9eb97c79081978becaba3cfe31aef13a4fc320fe4f8619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d8d71f0c0ceb7e3e9eb97c79081978becaba3cfe31aef13a4fc320fe4f8619->enter($__internal_55d8d71f0c0ceb7e3e9eb97c79081978becaba3cfe31aef13a4fc320fe4f8619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a30c9f401cd21566cd20c61862a5e5817ac36fa66d3fdb708b31c49dd31d85a->leave($__internal_7a30c9f401cd21566cd20c61862a5e5817ac36fa66d3fdb708b31c49dd31d85a_prof);

        
        $__internal_55d8d71f0c0ceb7e3e9eb97c79081978becaba3cfe31aef13a4fc320fe4f8619->leave($__internal_55d8d71f0c0ceb7e3e9eb97c79081978becaba3cfe31aef13a4fc320fe4f8619_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a9d375dd7f94987573ed71f954ba01b17cf1c0489f9771fdfc3869a912b15af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a9d375dd7f94987573ed71f954ba01b17cf1c0489f9771fdfc3869a912b15af->enter($__internal_6a9d375dd7f94987573ed71f954ba01b17cf1c0489f9771fdfc3869a912b15af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2f2ab0fdb728db67560c60275028b7c0f900a8ee6ecb3950c457923974dd5c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2ab0fdb728db67560c60275028b7c0f900a8ee6ecb3950c457923974dd5c29->enter($__internal_2f2ab0fdb728db67560c60275028b7c0f900a8ee6ecb3950c457923974dd5c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2f2ab0fdb728db67560c60275028b7c0f900a8ee6ecb3950c457923974dd5c29->leave($__internal_2f2ab0fdb728db67560c60275028b7c0f900a8ee6ecb3950c457923974dd5c29_prof);

        
        $__internal_6a9d375dd7f94987573ed71f954ba01b17cf1c0489f9771fdfc3869a912b15af->leave($__internal_6a9d375dd7f94987573ed71f954ba01b17cf1c0489f9771fdfc3869a912b15af_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3c94fb742d9ae13758757fb14a825d7ab9ab57a18b73a4c11aca78a94bec4a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c94fb742d9ae13758757fb14a825d7ab9ab57a18b73a4c11aca78a94bec4a8->enter($__internal_a3c94fb742d9ae13758757fb14a825d7ab9ab57a18b73a4c11aca78a94bec4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44c04523a52f889de5821a03a7e619764d97835a18b4f81d79c476cd64b25944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c04523a52f889de5821a03a7e619764d97835a18b4f81d79c476cd64b25944->enter($__internal_44c04523a52f889de5821a03a7e619764d97835a18b4f81d79c476cd64b25944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_44c04523a52f889de5821a03a7e619764d97835a18b4f81d79c476cd64b25944->leave($__internal_44c04523a52f889de5821a03a7e619764d97835a18b4f81d79c476cd64b25944_prof);

        
        $__internal_a3c94fb742d9ae13758757fb14a825d7ab9ab57a18b73a4c11aca78a94bec4a8->leave($__internal_a3c94fb742d9ae13758757fb14a825d7ab9ab57a18b73a4c11aca78a94bec4a8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
