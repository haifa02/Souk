<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_83ad133e26df865b30f5d50a40b6300a8dc231b8f8c7d13e390b930a4ab83985 extends Twig_Template
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
        $__internal_36e20a49214c0cecb91e7e3fe0fc18a92c93e94424825cf04914b6b0bf27436f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e20a49214c0cecb91e7e3fe0fc18a92c93e94424825cf04914b6b0bf27436f->enter($__internal_36e20a49214c0cecb91e7e3fe0fc18a92c93e94424825cf04914b6b0bf27436f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_30b4d8b5d33887788b864355947b9ca55026c4ed1b186ba61525b2a30e94be0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b4d8b5d33887788b864355947b9ca55026c4ed1b186ba61525b2a30e94be0f->enter($__internal_30b4d8b5d33887788b864355947b9ca55026c4ed1b186ba61525b2a30e94be0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36e20a49214c0cecb91e7e3fe0fc18a92c93e94424825cf04914b6b0bf27436f->leave($__internal_36e20a49214c0cecb91e7e3fe0fc18a92c93e94424825cf04914b6b0bf27436f_prof);

        
        $__internal_30b4d8b5d33887788b864355947b9ca55026c4ed1b186ba61525b2a30e94be0f->leave($__internal_30b4d8b5d33887788b864355947b9ca55026c4ed1b186ba61525b2a30e94be0f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e05096c63c6527453d5349aa72a66a70f94f864dcf4dc00e71e0f8c8e824f64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e05096c63c6527453d5349aa72a66a70f94f864dcf4dc00e71e0f8c8e824f64b->enter($__internal_e05096c63c6527453d5349aa72a66a70f94f864dcf4dc00e71e0f8c8e824f64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6938dd00575807a0d6011e291b160b45c5c8275c2b45f145add518c863883639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6938dd00575807a0d6011e291b160b45c5c8275c2b45f145add518c863883639->enter($__internal_6938dd00575807a0d6011e291b160b45c5c8275c2b45f145add518c863883639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_6938dd00575807a0d6011e291b160b45c5c8275c2b45f145add518c863883639->leave($__internal_6938dd00575807a0d6011e291b160b45c5c8275c2b45f145add518c863883639_prof);

        
        $__internal_e05096c63c6527453d5349aa72a66a70f94f864dcf4dc00e71e0f8c8e824f64b->leave($__internal_e05096c63c6527453d5349aa72a66a70f94f864dcf4dc00e71e0f8c8e824f64b_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/opt/lampp/htdocs/dev/souk/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}