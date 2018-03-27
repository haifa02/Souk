<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_6fee036cb0d8c0f40c4092e13e471d3627b7439960e874cb4032f4d9918f6a2c extends Twig_Template
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
        $__internal_1a645bf4fe7f429db9aaba5733f7ac631adc1c9ada10a5c0cd5312e1fb8265c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a645bf4fe7f429db9aaba5733f7ac631adc1c9ada10a5c0cd5312e1fb8265c7->enter($__internal_1a645bf4fe7f429db9aaba5733f7ac631adc1c9ada10a5c0cd5312e1fb8265c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a47141aaf048ca7682ef99cd77ad4413af195827b7b9c18f780d993bccaf4339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47141aaf048ca7682ef99cd77ad4413af195827b7b9c18f780d993bccaf4339->enter($__internal_a47141aaf048ca7682ef99cd77ad4413af195827b7b9c18f780d993bccaf4339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a645bf4fe7f429db9aaba5733f7ac631adc1c9ada10a5c0cd5312e1fb8265c7->leave($__internal_1a645bf4fe7f429db9aaba5733f7ac631adc1c9ada10a5c0cd5312e1fb8265c7_prof);

        
        $__internal_a47141aaf048ca7682ef99cd77ad4413af195827b7b9c18f780d993bccaf4339->leave($__internal_a47141aaf048ca7682ef99cd77ad4413af195827b7b9c18f780d993bccaf4339_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a4feb96a2a432177c42d55abf0501fe38927b925eb9c99113879c747dc77321a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4feb96a2a432177c42d55abf0501fe38927b925eb9c99113879c747dc77321a->enter($__internal_a4feb96a2a432177c42d55abf0501fe38927b925eb9c99113879c747dc77321a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fcc7277df354451c62bbb9ccc821ba0831ba843e3ff6ccf4b4be7056241d2992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc7277df354451c62bbb9ccc821ba0831ba843e3ff6ccf4b4be7056241d2992->enter($__internal_fcc7277df354451c62bbb9ccc821ba0831ba843e3ff6ccf4b4be7056241d2992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_fcc7277df354451c62bbb9ccc821ba0831ba843e3ff6ccf4b4be7056241d2992->leave($__internal_fcc7277df354451c62bbb9ccc821ba0831ba843e3ff6ccf4b4be7056241d2992_prof);

        
        $__internal_a4feb96a2a432177c42d55abf0501fe38927b925eb9c99113879c747dc77321a->leave($__internal_a4feb96a2a432177c42d55abf0501fe38927b925eb9c99113879c747dc77321a_prof);

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
