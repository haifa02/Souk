<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_0494edf4f4cbf11ceaa1af65bf0c33beb71777dfec57be1fd57b592219d68659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce6f800f8296f2587f53bd820ca69a8fb3a581bc894b7b3112b2181138859634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce6f800f8296f2587f53bd820ca69a8fb3a581bc894b7b3112b2181138859634->enter($__internal_ce6f800f8296f2587f53bd820ca69a8fb3a581bc894b7b3112b2181138859634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_01ab40da00968a7448984dd9e42ce601ebfd15c232e2aef4fd3dcb3061ee7fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ab40da00968a7448984dd9e42ce601ebfd15c232e2aef4fd3dcb3061ee7fe2->enter($__internal_01ab40da00968a7448984dd9e42ce601ebfd15c232e2aef4fd3dcb3061ee7fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce6f800f8296f2587f53bd820ca69a8fb3a581bc894b7b3112b2181138859634->leave($__internal_ce6f800f8296f2587f53bd820ca69a8fb3a581bc894b7b3112b2181138859634_prof);

        
        $__internal_01ab40da00968a7448984dd9e42ce601ebfd15c232e2aef4fd3dcb3061ee7fe2->leave($__internal_01ab40da00968a7448984dd9e42ce601ebfd15c232e2aef4fd3dcb3061ee7fe2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_036a233a7ec5ea0ddf67599714575add43be4930844c71b5d1696a43c40b77d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036a233a7ec5ea0ddf67599714575add43be4930844c71b5d1696a43c40b77d6->enter($__internal_036a233a7ec5ea0ddf67599714575add43be4930844c71b5d1696a43c40b77d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8722b084c47e8cf68ecbc5892500d3d1236c5b596f0a7ea41adad48518e17f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8722b084c47e8cf68ecbc5892500d3d1236c5b596f0a7ea41adad48518e17f06->enter($__internal_8722b084c47e8cf68ecbc5892500d3d1236c5b596f0a7ea41adad48518e17f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_8722b084c47e8cf68ecbc5892500d3d1236c5b596f0a7ea41adad48518e17f06->leave($__internal_8722b084c47e8cf68ecbc5892500d3d1236c5b596f0a7ea41adad48518e17f06_prof);

        
        $__internal_036a233a7ec5ea0ddf67599714575add43be4930844c71b5d1696a43c40b77d6->leave($__internal_036a233a7ec5ea0ddf67599714575add43be4930844c71b5d1696a43c40b77d6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\Soumaya\\Documents\\GitHub\\Souk\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
